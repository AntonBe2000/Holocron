<?php
session_start();
session_destroy();
echo '
<html>
<head>
    <meta charset="UTF - 8">
    <meta http-equiv="X - UA - Compatible" content="IE = edge">
    <meta name="viewport" content="width = device - width, initial - scale = 1"/>
    <meta name="author" content="Anton Bechtloff"/>
    <meta name="keywords" content="Pricing Model, Preismodell, Preismodellberatung, Deutsche Bahn, DB Systel"/>
    <link rel="shortcut icon" href="assets / favicon . ico" type="image / x - icon">
<link rel="stylesheet" href="stylesheets/general_style.css"/>
    <link rel="stylesheet" href="stylesheets/indexstyle.css"/>
    <link rel="stylesheet" href="stylesheets/survey.css"/>
    <link rel="stylesheet" href="stylesheets/modalstyle.css"/>
    <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">
    <title>Logout</title>
  
</head>
<body>
<br><br>
<h1>Ausgeloggt...</h1>
<main class="centeredContainer">
<div class=”div-hauptcontainer”>
<div id=”div-container1”>
Wenn Du dich wieder einloggen möchtest klicke hier
</div>
<div id=”div-container2”>
 <form action="login.php">
            <input type="submit" value="Login" class="button">
    </form>
</div>
</div>
    ';
if (isset($errorMessage)) {
    echo $errorMessage;
}
include("footer.html");


