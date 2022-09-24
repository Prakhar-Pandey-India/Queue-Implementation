var ele = document.getElementById('id-txt');
var r, getIndex = 1,
        deIndex = 1,
        col, tail, tailVal = 0,
        headVal = 0;

function getEle() {
        if (getIndex > 9) {
                alert("Cannot add furtur!!");
        }
        r = document.getElementsByClassName('in-text')[getIndex];
        if (ele.value == "") {
                alert("Insert a value!!");
        } else {
                r.value = ele.value;
                getIndex++;
                document.getElementById('f-txt').value = headVal;
                document.getElementById('r-txt').value = tailVal;
                tailVal++;
                ele.value = "";
                document.getElementById('para-msg').innerHTML = "The Inserted value is " + r.value;
                document.getElementById('para-msg').style.color = "green";
        }
}

function dequeue() {
        var del, msg;
        del = document.getElementsByClassName('in-text')[deIndex];
        if(deIndex>=getIndex){
                alert("Queue is Empty!!");   
        }else{
        document.getElementById('para-msg').innerHTML = "The deleted value is " + del.value;
        document.getElementById('para-msg').style.color = "red";
        del.value = "";
        deIndex++;
        headVal++;
        document.getElementById('f-txt').value = headVal;
        // tailVal--;
        console.log(headVal);
        console.log(tailVal);
        }
}

function clear() {
        // for (var i = 0; i < 9; i++) {
        //         r = document.getElementsByClassName('in-text')[i];
        //         r.value = "";
        // }
        
        document.getElementById('cls').reset();
        alert("ASDadfa");
        document.getElementById('f-txt').value = "";
        document.getElementById('r-txt').value = "";
        location.reload();
}
document.getElementById("enq").addEventListener("click", getEle);
document.getElementById("deq").addEventListener("click", dequeue);
document.getElementById("cls").addEventListener("click", clear);

