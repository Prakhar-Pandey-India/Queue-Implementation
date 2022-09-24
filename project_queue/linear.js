
'use-strict'
//this creates those boxes
var queue;
function numOfElementsCreate() {
    if (document.getElementById("numOfElementsIn").value.trim() == "" || document.getElementById("numOfElementsIn").value.trim() <1) {
        alert("ERROR: Input some value or insert value greater than 0")
        return
    }
    var numOfElementsIn = document.getElementById("numOfElementsIn");
    MAXSIZE = numOfElementsIn.value;
    queue = new Array(parseInt(MAXSIZE));
    for (let i = 0; i < MAXSIZE; i++) {
            document.getElementsByClassName("boxContainer")[0].innerHTML += '<div class="box" id="boxOf' + (i).toString() + '"></div>'
    }
    numOfElementsIn.value = ""
    numOfElementsIn.placeholder = "Disabled"
    numOfElementsIn.disabled = true;
    document.getElementById("createArrayButton").disabled = true;
    document.getElementById("createArrayButton").innerText = "Disabled";    
    console.log(document.getElementsByClassName("boxContainer")[0]);
}
//THIS WILL RESET THE PAGE
function refreshPage(){
  window.location.reload();
}


var front = -1, rear = -1, count = 0, MAXSIZE;
//UPDATE COLOR ACCORDING TO CURRENT POSITION
function updateColor(){
    document.getElementById("frontval").innerText = front
    document.getElementById("rearval").innerText = rear

    console.log("Front: "+front+"\nRear: "+rear+"\ncount: "+count);

    document.getElementsByClassName("boxContainer")[0].innerHTML=""
    for(i=0;i<queue.length;i++){
        document.getElementsByClassName("boxContainer")[0].innerHTML+= 
        '<div class="box" id="boxOf'+i+'">'+(queue[i]!=undefined?queue[i]:"")+'</div'
    }
    if(front==-1 && rear == -1){
            for(i=0;i<queue.length;i++)
                document.getElementsByClassName("box")[i].style.backgroundImage=""
    }
    else if(rear==front){
        document.getElementById("boxOf"+front).style.backgroundImage = "linear-gradient(to right, orange 0%, orange 50%, red 50%, red 100%)"
    }else{
        document.getElementById("boxOf"+front).style.backgroundImage = "linear-gradient(to right, orange 0%, orange 100%)"
        document.getElementById("boxOf"+rear).style.backgroundImage = "linear-gradient(to right, red 0%, red 100%)"
    }

}
//INSERT ELEMENT
function insertElement() {
    if (document.getElementById("insertElement").value == "") {
        alert("Cannot Insert Empty data, Input some value")
    }else{
        if (rear+1==MAXSIZE) {
            alert("Queue Full")
        }
        else {
            if(rear==-1 && front==-1){
                front = 0
                rear = 0
                queue[rear]=document.getElementById("insertElement").value;
            }else{
                rear=rear+1
                queue[rear]=document.getElementById("insertElement").value;
            }
        }
        updateColor();
    }
    document.getElementById("insertElement").value=""
}
//DELETE ELEMENT
function removeElement() {
    if (front==-1 && rear==-1) {
        alert("Queue Empty")
    }else if(front == rear){
        delete queue[front];
        front = -1;
        rear = -1;
    }else{
        console.log("Deleted: "+queue[front]);
        delete queue[front];
        front++;
    }
    updateColor();  
}