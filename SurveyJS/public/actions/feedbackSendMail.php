<?php
//Parameter der Meldung abfragen
$akro = $_POST["akro"]; //Akronym
$nachricht = $_POST["nachricht"]; //Nachricht
//E-Mail vorbereiten
$betreff = "Holcron Feedback von " . $akro;
$headers = "From: holocron@anton-bechtloff.de" . "\r\n";
$headers .= "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-Type: text/plain;charset=utf-8";
//Mailfunktion aufrufen
mail("mail@anton-bechtloff.de", $betreff, $nachricht, $headers);
