<?php
session_start();

$pdo = new PDO('mysql:host=mysql2f37.netcup.net; dbname=k151492_holocronLogin', 'k151492_holocron', 'holosql0103');
if (isset($_GET['login'])) {
    $email = $_POST['email'];
    $passwort = $_POST['passwort'];
    $statement = $pdo->prepare("SELECT * FROM users WHERE email = :email");
    $result = $statement->execute(array('email' => $email));
    $user = $statement->fetch();
    //Überprüfung des Passworts
    if ($user !== false && password_verify($passwort, $user['passwort'])) {
        $_SESSION['userid'] = $user['id'];
        header("Location:index.php");
        exit;
    } else {
        $errorMessage = "E-Mail oder Passwort war ungültig<br>";
    }
}
?>
<html>
<head>
    <!-- Metadaten -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="author" content="Anton Bechtloff"/>
    <meta name="keywords" content="Pricing Model, Preismodell, Preismodellberatung, Deutsche Bahn, DB Systel"/>
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="stylesheets/general_style.css"/>
    <link rel="stylesheet" href="stylesheets/indexstyle.css"/>
    <link rel="stylesheet" href="stylesheets/survey.css"/>
    <link rel="stylesheet" href="stylesheets/modalstyle.css"/>
    <title>Login</title>
</head>
<body>
<br><br>
<h1>Login</h1>
<main class="centeredContainer">
    <form action="?login=1" method="post">
        <table style="width:100%">
            <tr>
                <td><label for="email">E-Mail</label></td>
                <td><input type="email" size="40" maxlength="250" name="email" id="email"></td>
            </tr>
            <tr>
                <td><label for="passwort">Passwort</label></td>
                <td><input type="password" size="40" maxlength="250" name="passwort" id="passwort"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" class="button" value="Login"></td>
            </tr>
            <?php
            if (isset($errorMessage)) {
                echo '<tr><td colspan="2">'.$errorMessage.'</td></tr>';
            }
            ?>
        </table>
    </form>
    </div>
    <?php include("footer.html"); ?>
