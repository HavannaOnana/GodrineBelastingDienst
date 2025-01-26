<?php

include_once "./includes/Database.php";



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toeslag.nl</title>
    <link rel="stylesheet" href="./toeslag.css">
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

    <div class="section">
        <div class="section-text">
            <h1>Toeslagen</h1>
        <p>Een financiële bijdrage van de overheid bedoeld om huishoudens te ondersteunen<br> bij het betalen van noodzakelijke kosten, zoals de zorgverzekering, de opvoeding en <br>verzorging van kinderen, de huur van een woning en de kosten voor kinderopvang</p>
        </div>
    </div>

    <div class="toeslageninfo">
        <div class="zorgtoeslag">
            <h3>Zorgtoeslag</h3>
            <p>Lees alles over zorgtoeslag</p>
        </div>
        <div class="huurtoeslag">
            <h3>Huurtoeslag</h3>
            <p>Lees alles over huurtoeslag</p>
        </div>
        <div class="kinderopvangtoeaslag">
            <h3>Kinderopvangtoeslag</h3>
            <p>Lees alles over kinderopvangtoeaslag</p>
        </div>
    </div>








    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>