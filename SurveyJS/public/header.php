<!DOCTYPE html>
<html lang="en">
<head>
    <title>Holocron - Beratung zu Preismodellen</title>

    <!-- Metadaten -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Anton Bechtloff"/>
    <meta name="keywords" content="Pricing Model, Preismodell, Preismodellberatung, Deutsche Bahn, DB Systel"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">

    <!-- Your platform (jquery) scripts. -->
    <link href="https://unpkg.com/survey-jquery@1.8.29/modern.css" type="text/css" rel="stylesheet" />
    <script src="https://unpkg.com/survey-jquery@1.8.29/survey.jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.3/jspdf.min.js"></script>
    <script src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>
    <script src="scripts/feedback_modal.js"></script>
    <script src="scripts/contact_modal.js"></script>
    <script src="scripts/generatePDF.js"></script>
    <script src="scripts/canvas.js"></script>

<link rel="stylesheet" href="stylesheets/general_style.css"/>
    <link rel="stylesheet" href="stylesheets/indexstyle.css"/>
    <link rel="stylesheet" href="stylesheets/survey.css"/>
    <link rel="stylesheet" href="stylesheets/modalstyle.css"/>
    <link rel="stylesheet" href="stylesheets/canvas_style.css"/>
    <script src="scripts/survey.js"></script>
    <style>
        .factor {
            display: flex;
        }
    </style>
</head>
<?php
session_start();
if (!isset($_SESSION['userid'])) {
    die('Bitte zuerst <a href="login.php">einloggen</a>');
}
?>

<body>

