<?php
session_start();
require('databaseconnection.php');
?>
<html>

<head>
    <title>QUEUE</title>
    <link rel="stylesheet" href="account_style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Beastly&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Luxurious+Roman&family=Rubik+Beastly&display=swap" rel="stylesheet">

    <!-- <link rel="icon" type="image/x-icon" href="download1.jfif"> -->
    <link rel="stylesheet" href="account_navbar.css">
    <style>
        .googlesignup {
            position: relative;
            left: 43%;
            top: 8%;
            color: red;
        }

        .forloginsignup {
            width: 50%;
            height: 50%;
            /* border: 2px solid blue; */
            position: absolute;
            left: 25%;
            top: 25%;
            /* background-image: linear-gradient(black, red); */
            /* box-shadow: rgba(0, 0, 0, 0.09) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px; */
        }

        .login {
            width: 46%;
            height: 100%;
            /* border: 2px solid red; */
            left: 50%;
            top: -1000%;
            position: absolute;
            font-family: 'PT Serif', serif;
            box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
            border-radius: 68px;
            background: #201d1d;
            box-shadow:  35px 35px 70px #0d0c0c,
                        -35px -35px 70px #332e2e;
        }

        .signup {
            width: 46%;
            height: 100%;
            /* border: 2px solid rgb(17, 13, 13); */
            left: 27%;
            top: 0%;
            position: absolute;
            font-family: 'PT Serif', serif;
            box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
            background: #b9ddeb;
            border-radius: 68px;
            background: #201d1d;
            box-shadow:  35px 35px 70px #0d0c0c,
                        -35px -35px 70px #332e2e;
        }

        .signupaddthiswhenloginclick {
            position: absolute;
            top: -1000%;
        }

        .username {
            position: absolute;
            color:white;
            /* border: 1px solid black; */
            width: 75%;
            height: 15%;
            top: 20%;
            left: 11.5%
        }

        input {
            border-top-style: hidden;
            border-right-style: hidden;
            border-left-style: hidden;
            border-bottom-style: hidden;
            /* border: 1px solid black; */
            outline: none;
            width: 100%;
            height: 55%;
        }

        .email {
            position: absolute;
            top: 40%;
            color:white;
            /* border: 2px solid blue; */
            height: 15%;
            width: 75%;
            left: 11.5%;
        }

        .password {
            position: absolute;
            color:white;
            top: 61%;
            width: 75%;
            height: 15%;
            /* border: 2px solid yellow; */
            left: 11.5%;
        }

        hr {
            width: 100%;
            height: 0%;
            background-color: blue;
            position: absolute;
            top: 82%;
        }

        .signupp {
            width: 30%;
            height: 10%;
            /* border: 2px solid blue; */
            position: absolute;
            top: 85%;
            left: 35%;
        }

        .signupp button {
            position: absolute;
            left: 0%;
            background-color: skyblue;
            width: 100%;
            height: 100%;
            border-radius: 10px;
            color: white;
            font-weight: bold;
            background-color: black;
            cursor: pointer;
        }

        .signupp button:hover {
            background-color: blue;
        }

        .forboth {
            width: 50%;
            height: 9%;
            /* border: 2px solid orange; */
            border-radius: 10px;
            position: absolute;
            left: 25%;
            top: 15%;
        }

        .tologin {
            width: 40%;
            justify-content: center;
            text-align: center;
            height: 50%;
            /* border: 1px solid blue; */
            position: absolute;
            left: 9.8%;
            top: 20%;
            border-radius: 25px;
            color: white;
            cursor: pointer;
        }

        .tologin_click {

            position: absolute;
            top: 0%;
            left: 27%;
            background-color: #201d1d;

        }

        .tosignup {
            width: 40%;
            cursor: pointer;
            justify-content: center;
            text-align: center;
            height: 50%;
            /* border: 1px solid blue; */
            position: absolute;
            left: 50%;
            color: white;
            top: 20%;
            border-radius: 45px;
            box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
        }

        .box_shadow {
            box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
            border: 1px solid white;
        }

        .signupbox_shadow {
            box-shadow: none;
        }

        .for_success_failure {
            position: absolute;
            top: 105%;
            left: 20%;
            font-family: 'PT Serif', serif;
        }

        .forusericon {
            /* background-color: green; */
            color: #ff0000;
            width: 20%;
            height: 44%;
            position: absolute;
            left: -7%;
            top: 35%;
        }

        .foruseremail {
            color: #ff0000;
            width: 20%;
            height: 44%;
            position: absolute;
            left: -6%;
            top: 38%;
        }

        .foruserpassword {
            color: #ff0000;
            width: 20%;
            height: 44%;
            position: absolute;
            left: -6%;
            top: 42%;
        }

        .usernamesvg {
            color: blue;
            position: absolute;
            top: 36%;
            left: -13%;
            width: 15%;
            height: 50%;
        }

        .emailsvg {
            color: red;
            position: absolute;
            top: 40%;
            left: -11%;
            width: 10%;
            height: 50%;
        }

        .passwordsvg {
            color: purple;
            position: absolute;
            top: 40%;
            left: -10%;
            width: 10%;
            height: 50%;
        }

        .horizontal {
            width: 37%;
            background-color: blue;
            position: relative;
            top: 13.5%;

        }

        .or {
            position: relative;
            color: white;
            font-size: 20px;
            font-weight: 900;
            top: 10%;
            left: 41%;
        }

        .horizontal1 {
            left: 54%;
            position: relative;
            top: 7%;
            width: 45%;
        }
    </style>
</head>

<body style="background-color: #201d1d;">
        <div class="navi">
            <nav>
                <a href="home.html">Home</a>
                <a href="info.html">INFORMATION ON QUEUE</a>
                <a href="account.php">LOG IN/SIGN UP</a>
                <a href="AboutUs.html">ABOUT Us</a>
                <div class="animation start-home"></div>
            </nav>
        </div>
        <div class="column">
                <img src="5.jpg" style="height: 250px; margin-top: 150px; margin-left: 30px; width: 480px;">
                <img src="6.gif" style="height: 250px; margin-top: 150px; margin-left: 500px; width: 480px;">
            </div>
    <div class="container">
        <!-- for signup and login block start -->
        <div class="forboth">
            <div class="tologin" onclick="func()">LOGIN</div>
            <div class="tosignup box_shadow" onclick="func1()">SIGNUP</div>
        </div>
        <div class="forloginsignup">
            <!-- for for signup start -->
            <form action="" method="post" autocomplete="off">
                <div class="signup">
                    <div class="username">
                        <label for="user">USERNAME:</label>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-square usernamesvg" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                            <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z" />
                        </svg>
                        <input type="text" name="username" id="user" placeholder="  Enter name &#128522" required>
                        <hr>
                    </div>

                    <div class="email">
                        <label for="email">EMAIL:</label>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-open-fill emailsvg" viewBox="0 0 16 16">
                            <path d="M8.941.435a2 2 0 0 0-1.882 0l-6 3.2A2 2 0 0 0 0 5.4v.314l6.709 3.932L8 8.928l1.291.718L16 5.714V5.4a2 2 0 0 0-1.059-1.765l-6-3.2ZM16 6.873l-5.693 3.337L16 13.372v-6.5Zm-.059 7.611L8 10.072.059 14.484A2 2 0 0 0 2 16h12a2 2 0 0 0 1.941-1.516ZM0 13.373l5.693-3.163L0 6.873v6.5Z" />
                        </svg>
                        <input type="email" name="email" id="email" placeholder="  Enter Email &#128522" required>
                        <hr>
                    </div>

                    <div class="password">
                        <label for="password">PASSWORD:</label>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-unlock-fill passwordsvg" viewBox="0 0 16 16">
                            <path d="M11 1a2 2 0 0 0-2 2v4a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9a2 2 0 0 1 2-2h5V3a3 3 0 0 1 6 0v4a.5.5 0 0 1-1 0V3a2 2 0 0 0-2-2z" />
                        </svg>
                        <input type="password" name="password" id="password" placeholder="  Enter Password &#128522" required>
                        <hr>
                    </div>

                    <div class="signupp">
                        <button name="signup">SIGNUP</button>
                    </div>
                </div>
            </form>

            <?php
            if (isset($_POST['signup'])) {
                $res = false;
                $username = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $sql = "INSERT INTO `forsignup` ( `username`, `email`, `password`) VALUES ('$username', '$email', '$password')";
                $res = mysqli_query($conn, $sql);
                if ($res) {
            ?>
                    <script>
                        alert("you have signUp successfully");
                        location.href = 'account.php';
                    </script>
                <?php
                    // header('Location: index.php');
                } else if (!$res) {
                    //   echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    //   <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                    //   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    // </div>';
                ?>
                    <script>
                        alert("failed to signedUp");
                    </script>
            <?php

                }
            }
            ?>
            <!-- form for signup end -->
            <!-- form for login start -->
            <form action="" method="post" autocomplete="off">
                <div class="login">
                    <!-- using google login -->
                    <a href="https://accounts.google.com/o/oauth2/auth/oauthchooseaccount?response_type=code&access_type=online&client_id=483344903664-u1a2pbekuqa7h0dqrmmfifj1dic5akkm.apps.googleusercontent.com&redirect_uri=http%3A%2F%2Flocalhost%2Ffood_delivery_resturant%2Faccount.php&state&scope=email%20profile&approval_prompt=auto&flowName=GeneralOAuthFlow" class="googlesignup">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
                            <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z" />
                        </svg>
                    </a>
                    <hr class="horizontal"><span class="or">OR</span>
                    <hr class="horizontal1">
                    <div class="email">
                        <label for="email">EMAIL:</label>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-open-fill emailsvg" viewBox="0 0 16 16">
                            <path d="M8.941.435a2 2 0 0 0-1.882 0l-6 3.2A2 2 0 0 0 0 5.4v.314l6.709 3.932L8 8.928l1.291.718L16 5.714V5.4a2 2 0 0 0-1.059-1.765l-6-3.2ZM16 6.873l-5.693 3.337L16 13.372v-6.5Zm-.059 7.611L8 10.072.059 14.484A2 2 0 0 0 2 16h12a2 2 0 0 0 1.941-1.516ZM0 13.373l5.693-3.163L0 6.873v6.5Z" />
                        </svg>
                        <input type="email" name="email" id="email" placeholder="  Enter Email &#128522" required>
                        <hr>
                    </div>

                    <div class="password">
                        <label for="password">PASSWORD:</label>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-unlock-fill passwordsvg" viewBox="0 0 16 16">
                            <path d="M11 1a2 2 0 0 0-2 2v4a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9a2 2 0 0 1 2-2h5V3a3 3 0 0 1 6 0v4a.5.5 0 0 1-1 0V3a2 2 0 0 0-2-2z" />
                        </svg>
                        <input type="password" name="password" id="password" placeholder="  Enter Password &#128522" required>
                        <hr>
                    </div>
                    <div class="signupp">
                        <button class="submit" name="submit1">LOGIN</button>
                    </div>
                </div>
                <?php
                if (isset($_POST['submit1'])) {
                    // $res=false;
                    // $username=$_POST['username'];
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                    // $username = $_POST['username'];
                    $sqll = "SELECT * FROM `forsignup` WHERE email='$email' AND password='$password'";
                    $res = mysqli_query($conn, $sqll);
                    $check = mysqli_num_rows($res);
                    if ($check > 0) {
                        // echo "login successfully";
                        $_SESSION['username'] = $email;
                ?>
                        <script>
                            location.href = 'implementation.html';
                        </script>
                    <?php
                        // header('Location: index.php');
                    } else {
                    ?>
                        <script>
                            alert("invalid email or password!");
                        </script>
                <?php

                    }
                }
                ?>
            </form>
            <!-- form for login end -->
        </div>
        <!-- for login amd signup block ends -->
    </div>
        <?php
        echo "<script type='text/javascript'>
    function func(){
        var tologin=document.getElementsByClassName('tologin');
        var login=document.getElementsByClassName('login');
        var tosignup=document.getElementsByClassName('tosignup')
        var tosignupaddwhenloginclick=document.getElementsByClassName('signup')
       
        tosignupaddwhenloginclick[0].classList.add('signupaddthiswhenloginclick');
        login[0].classList.add('tologin_click');
       
        tologin[0].classList.add('box_shadow');
        tosignup[0].classList.remove('box_shadow');
        // console.log(tosignip[0]);
        // console.log(tosignupaddwhenloginclick);
        // console.log(login[0]);
    }
    function func1(){
        var tologin=document.getElementsByClassName('tologin');
        var login=document.getElementsByClassName('login');
        var tosignup=document.getElementsByClassName('tosignup')
        var tosignupaddwhenloginclick=document.getElementsByClassName('signup')
        login[0].classList.remove('tologin_click');
        tologin[0].classList.remove('box_shadow');
        tosignup[0].classList.remove('signupbox_shadow');
        tosignup[0].classList.add('box_shadow');
        tosignupaddwhenloginclick[0].classList.remove('signupaddthiswhenloginclick');
        // console.log(tosignip[0]);
    }
    </script>";
        ?>
    <div>
        <img src="7.png" style="height: 250px; margin-top: 30px; width: 480px; margin-left: 30px;">
        <img src="8.gif" style="height: 250px; margin-top: 30px; width: 480px; margin-left: 500px;">
    </div>
    <p>
        <!-- <button type="submit"></button> -->
        <!-- <button type="submit" onclick="admin.php">Admin Login</button> -->
        <a href="admin1.html" style="color: white; position:relative; margin-left:42%; font-size:35px; margin-top:-15px;"><span>Admin Login</span></a>
    </p>
</body>

</html>