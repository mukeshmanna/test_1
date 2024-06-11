
<!DOCTYPE html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <style>
        html,body{
            width: 100%;
            height: 100%;
            margin: 0px;
            padding: 0px;
            overflow-x: hidden;
        }
        </style> -->
<script>
         function funclogin()
        {
            window.open("login.php","_self");
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
            font-size: 24px;
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
        }
    </style>
</head>
<body>
<h1>ABC</h1>
<p class="clgname">college of arts and science</p><br>
<div class="navbar">
    <a href="#home">Home</a>
    <a href="about.html">About Us</a>
        <!-- <a href="#Academics">Academics</a>
        <a href="#Admissions">Admissions</a>
    <a href="#faculty">Faculty</a>
    <a href="#placement">Placement</a>
    <a href="#sports">Sports</a>
    <a href="#clubs">Clubs</a>
    <a href="#contact-us">Contact Us</a> -->
</div>
<div class="container">
    <img class="landscape-image" src="asset/clgstudent.jpg" alt="Landscape Picture">
    <div class="text">Freshers Support Group<button class="btn1" onclick="funclogin()">Click Here</button></div>
</div>


</body>
</html>