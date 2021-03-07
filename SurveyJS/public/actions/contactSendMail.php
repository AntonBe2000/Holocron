<?php
//Parameter der Meldung abfragen

$vorname = $_POST["vorname"]; //Vorname
$nachname = $_POST["nachname"]; //Nachname
$nachricht = $_POST["nachricht"]; //E-Mail Adresse
$email = $_POST["email"]; //Vorname
//E-Mail vorbereiten
$betreff = "Holocron Nachricht von ".$vorname." ".$nachname;
$headers = "From: holocron@anton-bechtloff.de" . "\r\n";
$headers .= "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-Type: text/plain;charset=utf-8";

//    function getHeaderStr(array $headers)
//    {
//        return implode("\r\n", array_map(function($value, $key) {
//            return "{$key}: {$value}";
//        }, array_values($headers), array_keys($headers)));
//    }
//
//    $headers = getHeaderStr([
//        "From" => "holocron@anton-bechtloff.de",
//        "MIME-Version" => "1.0",
//        "Content-Type" => "text/plain;charset=utf-8"
//    ]);

//Mailfunktion aufrufen
mail("mail@anton-bechtloff.de", $betreff, $nachricht." ".$email, $headers);
