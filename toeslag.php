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

    <div class="zorgtoeslaginfo">
        <img src="./images/zorgtoeslag.svg" alt="">
        <div class="text">
            <h1>Zorgtoeslag</h1>
            <p>Een bijdrage voor de kosten van uw zorgverzekering</p>
            <p>Een zorgverzekering is niet goedkoop. Daarom is er zorgtoeslag:<br> een bijdrage van de overheid om de zorgverzekering betaalbaar te houden. Hieronder zijn de voorwaarden:</p>
            <ul>
                <li>U hebt een Nederlandse zorgverzekering</li>
                <li>Uw inkomen ligt onder de (gezamenlijke) inkomengrens</li>
                <li>Uw vermogen mogen niet meer dan 141.896 </li>
                <li>U bent 18 of ouder zijn</li>
            </ul>
        </div>
    </div>

    <div class="huurtoeslaginfo">
        <div class="text">
            <h1>Huurtoeslag</h1>
            <p>Een bijdrage om de huur mee te betalen</p>
            <p>Huurtoeslag is een bijdrage om de huur van uw woning mee te kunnen betalen<br>. Om de toeslag te kunnen krijgen, mag u niet te veel verdienen.<br> Ook mag de huur niet te hoog zijn. Hieronder zijn de voorwarden</p>
            <ul>
                <li>Uw huur is niet te hoog</li>
                <li>U huurt een zelfstandige woonruimte</li>
                <li>U woont in Nederland</li>
                <li>U bent 18 of ouder</li>
                <li>U betaalt de huur en kunt dit aantonen met bankafschriften.</li>
            </ul>
        </div>
        <img src="./images/huurtoeslag.svg" alt="">
    </div>

    <div class="kinderopvangtoeslaginfo">
          <img src="./images/kinderopvangtoeslag.svg" alt="">
          <div class="text">
            <h1>Kinderopvangtoeslag</h1>
          <p>Een bijdrage voor de kosten van de kinderopvang</p>
          <p>U wilt dat uw kinderen goed opgevangen worden terwijl u werkt.<br> En dat is zeker niet goedkoop. Daarom is er de kinderopvangtoeslag: een tegemoetkoming in<br> de kosten van geregistreerde opvang. Hieronder zijn de voorwaarden</p>
          <ul>
            <li>U werkt</li>
            <li>U volgt een opleiding</li>
            <li>U volgt een traject naar werk</li>
            <li>U volgt een inburingscursus</li>
            <li>Uw kind woont bij u</li>
          </ul>
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