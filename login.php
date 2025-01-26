<?php

include_once "./Functies/User.php";





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In </title>
    <link rel="stylesheet" href="./login.css">
</head>
<body>

 <div class="navbar">
        <img src="./images/BD logo.png" alt="">
        <div class="home">
            <ion-icon name="home"></ion-icon>
            <a href="./toeslag.php">Home</a>
        </div>
        <div class="login">
            <ion-icon name="person"></ion-icon>
            <a href="./login.php">Inloggen</a>
        </div>
    </div>


    <div class="form">
        <h1>Log In</h1>
        <form action="login.php" method="post">
           <label for="username" name="username">Username :</label><br>
           <input type="text" name="username" required><br><br>
           <label for="password" name="password">Password : </label><br>
           <input type="text" name="password" required><br><br>
           <button type="submit">Log in</button>
        </form>
        <div class="otherlinks">
           <a href="">Forgot Password</a>
           <a href="./register.php">Not registered??</a>
        </div>
    </div>
    
    <div class="footer">
        <div class="footer1">
            <img src="./images/BD logo.png" alt="">
            <p>De Belastingdienst (ook: fiscus) is in Nederland belast met het heffen en innen van rijksbelastingen.<br> De dienst maakt onderdeel uit van het ministerie<br> van Financiën. Met de Belastingdienst wordt <br>in Nederland dus kortweg de rijksbelastingdienst bedoeld.</p>
        </div>
        <div class="footer2">
            <ion-icon name="logo-python"></ion-icon>
            <ion-icon name="logo-github"></ion-icon>
            <ion-icon name="logo-tiktok"></ion-icon>
            <ion-icon name="logo-pinterest"></ion-icon>
            <ion-icon name="logo-soundcloud"></ion-icon>
        </div>
        <div class="footer3">
            <hr>
            <p>&copy; Godrine Manu 2025</p>
        </div>
    </div>


    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>