<?php
$json = json_decode(trim(file_get_contents("php://input")), true);
$akro = $json["akro"];
$nachricht = $json["nachricht"];

//Parameter der Meldung abfragen
//E-Mail vorbereiten
$betreff = "Holcron Feedback von " . $akro;
$headers = "From: holocron@anton-bechtloff.de" . "\r\n";
$headers .= "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-Type: text/plain;charset=utf-8";
//Mailfunktion aufrufen
mail("mail@anton-bechtloff.de", $betreff, $nachricht, $headers);