<?php 
include('config.php');
?>
<!DOCTYPE html>
<link rel="stylesheet" href="css/convo.css">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        html,body{
            width: 100%;
            height: 100%;
            margin: 0px;
            padding: 0px;
            overflow-x: hidden;
        }
        </style>
<script>
         function funclogout()
        {
            window.open("logout.php","_self");
        }
</script>
<title>HOME</title>
</head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<body>
<!-- Style starts here-->
<style>
        body {
            background-image: linear-gradient(#ffffff, #1261a0);
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            background-attachment: fixed;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        h1 {
            font-size: 50px;
            font-family: Georgia, 'Times New Roman', Times, serif;
        }
        h2 {
            font-size: 38px;
            font-family: Georgia, 'Times New Roman', Times, serif;
            position: absolute;
            left: 1200px;
            top: -1px;
        }
        .clgname {
            font-size: 38px;
            font-family: Georgia, 'Times New Roman', Times, serif;
            position: absolute;
            left: 120px;
            top: 2px;
        }
        /* Style the navigation bar */
        .navbar {
            background-color: #333;
            overflow: hidden;
        }
        /* Style the buttons */
        .navbar a {
            float: left;
            display: flex;
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }
        /* Change background color on hover */
        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }
        /* Container for the image and text */
        .container {
            background-color: #ffffff;
            width: 100%;
            height: auto;
            position: absolute;
            text-align: center;
            color: white;
            z-index: 0;
        }
        /* Style the image */
        .landscape-image {
            width: 50%; /* Adjust image width as needed */
            height: 50%; /* Maintain aspect ratio */
            display: inline-block;
            object-fit: cover;
        }
        /* Style the text */
        .text {
            position: absolute;
            bottom: 20px; /* Adjust vertical position */
            left: 50%;
            transform: translateX(-50%);
            font-size: 30px;
            color: black;
        }
        .btn1 {
            padding: 10px 20px;
            background-color: white;
            color: black;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            position: relative;
            left: 1250px;
            top: -42px;
        }
    </style>
</head>
<body>
<h1>ABC</h1>
<p class="clgname">college of arts and science</p><br>
<h2 class="uname">Hi! <?php echo $_SESSION['username']; ?></h2>
<div class="navbar">
        <!-- <a href="#Academics">Academics</a>
        <a href="#Admissions">Admissions</a>
    <a href="#faculty">Faculty</a>
    <a href="#placement">Placement</a> -->
    <a href="sports.html">Sports</a>
    <a href="club.html">Clubs</a>
    <a href="contact.html">Contact Us</a>
</div>
<div class="container">
    <img class="landscape-image" src="image/mca img.jpg" alt="Landscape Picture">
    <div class="text">Welcome Freshers!</div>
</div>
<button class="btn1" onclick="funclogout()">Logout</button>
<!-- chat bot -->
<div class="chat-bar-collapsible">
        <button id="chat-button" type="button" class="collapsible">Chat with us! &nbsp;
            <i id="chat-icon" style="color: #fff;" class="fas fa-comments"></i>
        </button>
        <div class="content">
            <div class="full-chat-block">
                <!-- Message Container -->
                <div class="outer-container">
                    <div class="chat-container">
                        <!-- Messages -->
                        <div id="chatbox">
                            <h5 id="chat-timestamp"></h5>
                            <p id="botStarterMessage" class="botText"><span>Loading...</span></p>
                        </div>
                        <!-- User input box -->
                        <div class="chat-bar-input-block">
                            <div id="userInput">
                                <input id="textInput" class="input-box" type="text" name="msg"
                                    placeholder="Tap 'Enter' to send a message">
                                <p></p>
                            </div>
                            <div class="chat-bar-icons">
                                <button onclick="sendButton()">Send</button>
                            </div>
                        </div>
                        <div id="chat-bar-bottom">
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JS File Link -->
    <script src="responses.js"></script>
    <script src="convo.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</body>
</html>