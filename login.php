<?php
include('config.php');
if(isset($_POST['login'])){
    $user = $_POST['uname'];
    $pass = $_POST['pass'];
    $select = mysqli_query($conn, "SELECT * FROM `users` WHERE username = '$user' AND password = '$pass'");
    $row = mysqli_fetch_array($select);

    if(is_array($row)){
        $_SESSION["username"] = $row['username'];
        $_SESSION["email"] = $row['email'];
        $_SESSION["password"] = $row['password'];
    }
    else{
        echo "<script> alert('Invalid Username or Password'); 
        windows.location.href = 'login.php'; </script>";
    }
}
if(isset($_SESSION['username'])){
    header("location: fresher.php");
}
?>
<html>

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta name="description" content="Login - Register Template">
    <meta name="author" content="Lorenzo Angelino aka MrLolok">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <style>
        body {
            background-color: #303641;
        }
    </style>
</head>

<body>
    <div id="container-login">
        <div id="title">
            <i class="material-icons lock">lock</i> Login
        </div>

        <form method="POST">
            <div class="input">
                <div class="input-addon">
                    <i class="material-icons">face</i>
                </div>
                <input id="username" placeholder="Username" type="text" name="uname" required class="validate" autocomplete="off">
            </div>

            

            <div class="input">
                <div class="input-addon">
                    <i class="material-icons">vpn_key</i>
                </div>
                <input id="password" placeholder="Password" name="pass" type="password" required class="validate" autocomplete="off">
            </div><br>

            <input type="submit" name="login" value="Login" />
        </form>


        <div class="register">
            Don't have an account yet?
            <a href="register.php"><button id="register-link">Register</button></a>
        </div>
    </div>
</body>

</html>
