<?php
include('config.php');
if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $roll = $_POST["roll"];
    $stype = $_POST["select"];
    
            $query = "INSERT INTO `sports` VALUES('','$name','$roll','$stype')";
            mysqli_query($conn,$query);
            echo "<script> alert('Registration Success!.');
            window.location.href = 'fresher.php';
             </script>";
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
         Enroll
        </div>

        <form method="POST">
            <div class="input">
                <div class="input-addon">
                </div>

            <!-- <div class="clearfix"></div> -->

            <div class="input">
                <div class="input-addon">
                </div>
                <input id="username" placeholder="Name" name="name" type="text" required class="validate" autocomplete="off">
            </div>

            <div class="clearfix"></div>

            <div class="input">
                <div class="input-addon">
                </div>
                <input id="password" placeholder="Roll No" name="roll" type="text" required class="validate" autocomplete="off">
            </div>

            <div>
                <div class="input-addon">
                </div>
                <select id="password" placeholder=" Choose" name="select" type="select" required class="validate" autocomplete="off">
                    <option value="">-Choose-</option>
                    <option value="cricket">-Cricket-</option>
                    <option value="kabbadi">-Kabbadi-</option>
                    <option value="basket ball">-Basket Ball-</option>
                    <option value="tennis">-Tennis-</option>
                    
                    
            </div><br><br>
            

            <input type="submit" name="submit" value="Enroll" />
        </form>


    </div>
</body>

</html>

