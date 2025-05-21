<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Initiation PHP</title>
</head>
<body>
    <h2>
        <?php
        session_start();
        if ($_GET["first_name"]) {
            echo 'Bonjour ' . htmlspecialchars($_GET["first_name"]) . ' !';
        }
        elseif ($_SESSION["first_name"]) {
            echo 'Bonjour ' . htmlspecialchars($_SESSION["first_name"]) . ' !';
        }
        elseif ($_POST["first_name"]) {
            echo 'Bonjour ' . htmlspecialchars($_POST["first_name"]) . ' !';
            $_SESSION["first_name"] = $_POST["first_name"];
        }
        else {
            echo 'Bonjour Anonyme !';
        }
        ?>
    </h2>
    <form action="exercice.php" method="post">
        <p>Votre nom : <input type="text" name="first_name" /></p>
        <p><input type="submit" value="OK"></p>
    </form>
    <form action="<?php $_SESSION["first_name"] = null; ?>" method="post">
        <p><input type="submit" value="Reset $_Session"></p>
    </form>
</body>
</html>