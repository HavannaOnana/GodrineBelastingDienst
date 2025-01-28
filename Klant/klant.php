<?php

session_start();
include_once "../Functies/Huurtoeslag.php";

// Redirect to login if not logged in
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

$huurtoeslag = new Huurtoeslag();

// Fetch logged-in user's name and income
$username = $_SESSION['username'];
$user = $huurtoeslag->selectUserByName($username);



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klant</title>
    <link rel="stylesheet" href="../css/klant.css">
</head>
<body>

    <div class="navbar">
        <img src="../images/BD logo.png" alt="">
        <div class="home">
            <ion-icon name="home"></ion-icon>
            <a href="../Klant/klant.php">Home</a>
        </div>
        <div class="home">
            <ion-icon name="business"></ion-icon>
            <a href="../Klant/huurtoeslag.php">Huurtoeslag</a>
        </div>
        <div class="home">
            <ion-icon name="heart"></ion-icon>
            <a href="../Klant/zorgtoeslag.php">Zorgtoeslag</a>
        </div>

         <div class="home">
            <ion-icon name="woman"></ion-icon>
            <a href="../Klant/zorgtoeslag.php">Kinderopvangtoeslag</a>
        </div>

        <div class="home">
            <ion-icon name="person"></ion-icon>
            <a href="../login.php">Logout</a>
        </div>
        
    </div>

     <div class="top-content">
        <h1>Hallo, <span class="user-name"><?php echo htmlspecialchars($user['name']); ?></span></h1>
        <p>Inkomen: <span class="user-income"><?php echo htmlspecialchars($user['inkomen']); ?></span> per jaar</p>
    </div>
    
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>