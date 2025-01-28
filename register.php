<?php
include_once "../Functies/User.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Create a User object
    $user = new User();

    // Retrieve form data
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    $name = $_POST['name'] ?? '';
    $leeftijd = $_POST['leeftijd'] ?? '';
    $woonplaats = $_POST['woonplaats'] ?? '';
    $adres = $_POST['adres'] ?? '';
    $gezinssamenstelling = $_POST['gezinssamenstelling'] ?? '';
    $inkomen = $_POST['inkomen'] ?? '';
    $partnernaam = $_POST['partnernaam'] ?? '';
    $partnerleeftijd = $_POST['partnerleeftijd'] ?? '';

    // Validate required fields (simple example)
    if (!empty($username) && !empty($password)) {
        // Call the insertUser method
        $result = $user->insertUser(
            $username,
            $password,
            $name,
            $leeftijd,
            $woonplaats,
            $adres,
            $gezinssamenstelling,
            $inkomen,
            $partnernaam,
            $partnerleeftijd
        );

        if ($result) {
            // Redirect to another page (e.g., success.php)
            header("Location: ./login.php");
            exit(); // Ensure the script stops after the redirect
        } else {
            echo "Failed to register user.";
        }
    } else {
        echo "Username and password are required!";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Je gegevens</title>
    <link rel="stylesheet" href="./register.css">
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

    <div class="form-div">
        <h1>Register</h1>
        <form action="" method="post">
            <div class="form">
                <div class="left">
                     <label for="username" name="username">Username:</label><br>
                     <input type="text" name="username"><br><br>
                     <label for="password" name="password">Password:</label><br>
                     <input type="text" name="password"><br><br>
                     <label for="name" name="name">Name:</label><br>
                     <input type="text" name="name"><br><br>
                     <label for="leeftijd" name="leeftijd">Leeftijd:</label><br>
                     <input type="text" name="leeftijd"><br><br>
                     <label for="woonplaats" name="woonplaats">Woonplaats:</label><br>
                     <input type="text" name="woonplaats"><br><br>
                </div>
                
                <div class="right">
                    <label for="adres" name="adres">Adres:</label><br>
                    <input type="text" name="adres"><br><br>
                    <label for="gezinssamenstelling" name="gezinssamenstelling" >Gezinssamenstelling</label><br>
                    <select name="gezinssamenstelling" id="gezinssamenstelling"><br>
                        <option value="traditionel">Traditionel</option>
                        <option value="eenoudergezin">Eenoudergezin</option>
                        <option value="samengesteld ">Samengesteld</option>
                        <option value="kinderloos">Kinderloos</option>
                        <option value="pleeggezin">Pleeggezin</option>
                        <option value="anders">Anders</option>
                    </select><br><br>
                    <label for="inkomen" name="inkomen">Inkomen:(optioneel)</label><br>
                    <input type="text" name="inkomen"><br><br>
                    <label for="partnernaam" name="partnernaam">Partnernaam:</label><br>
                    <input type="text" name="partnernaam" required><br><br>
                    <label for="partnerleeftijd" name="partnerleeftijd">Partnerleeftijd:</label><br>
                    <input type="text" name="partnerleeftijd">
                </div>
            </div>
            <button type="submit"> Register</button>
        </form>
    </div>




    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    
</body>
</html>