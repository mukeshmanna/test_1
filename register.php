<?php
include('config.php');
if(isset($_POST["submit"])){
    $email = $_POST["email"];
    $user = $_POST["uname"];
    $pass = $_POST["pass"];
    $cpass = $_POST["cpass"];
    $clone = mysqli_query($conn, "SELECT * FROM users WHERE username = '$user' OR password = '$pass'");
    if(mysqli_num_rows($clone) > 0){
        echo "<script> alert('Username or Password already taken.'); </script>";
    }
    else{
        if($pass == $cpass){
            $query = "INSERT INTO `users` VALUES('','$user','$email','$pass')";
            mysqli_query($conn,$query);
            echo "<script> alert('Registration Success!.'); </script>";
        }
        else{
            echo "<script> alert('Password Mismatch'); </script>";
        }
        
    }
}
?><html>

<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <meta name="description" content="Login - Register Template">
    <meta name="author" content="Lorenzo Angelino aka MrLolok">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        body {
            background-color: #303641;
        }
    </style>
</head>

<body>
    <div id="container-register">
        <div id="title">
            <i class="material-icons lock">lock</i> Register
        </div>

        <form method="POST">
            <div class="input">
                <div class="input-addon">
                    <i class="material-icons">email</i>
                </div>
                <input id="email" placeholder="Email" name="email" type="email" required class="validate" autocomplete="off">
            </div>

            <!-- <div class="clearfix"></div> -->

            <div class="input">
                <div class="input-addon">
                    <i class="material-icons">face</i>
                </div>
                <input id="username" placeholder="Username" name="uname" type="text" required class="validate" autocomplete="off">
            </div>

            <div class="clearfix"></div>

            <div class="input">
                <div class="input-addon">
                    <i class="material-icons">vpn_key</i>
                </div>
                <input id="password" placeholder="Password" name="pass" type="password" required class="validate" autocomplete="off">
            </div>

            <div class="input">
                <div class="input-addon">
                    <i class="material-icons">vpn_key</i>
                </div>
                <input id="password" placeholder=" Confirm Password" name="cpass" type="password" required class="validate" autocomplete="off">
            </div><br>

            <input type="submit" name="submit" value="Register" />
        </form>

        <div class="register">
            Do you already have an account?
            <a href="login.php"><button id="register-link">Login</button></a>
        </div>
    </div>
</body>

</html>
