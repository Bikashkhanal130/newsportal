<?php require('connection.php'); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User- LogIn and Register</title>
  </head>
  <body>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header> 
        <h2>NewsPortal</h2>
        <nav>
            <a href="index.php">Home</a>
            <a href="contactus.php">Contact</a>
            <a href="aboutus.php">About</a>
        </nav>
        <div class="sign-in-up">
            <button type="button" onclick="popup('login-popup')">LOGIN</button>
            <button type="button" onclick="popup('register-popup')">REGISTER</button>
        </div>

        <div class="container">
        
        <div class="popup" id="index.php">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/73/Flat_tick_icon.svg/1024px-Flat_tick_icon.svg.png" width="110px" height="100px">
            <h2>Thank You!</h2>
            <p>Your details has been successfully submitted. Thanks!</p>
            <a href="./index.php" class="okBtn">OK</a>
        </div>
    </div>
</body>