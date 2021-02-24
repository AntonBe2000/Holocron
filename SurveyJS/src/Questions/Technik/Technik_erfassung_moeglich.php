<?php


class Technik_erfassung_moeglich
{
    public function calculate($value, &$factors, &$excluded)
    {
        switch ($value) {
            case "Ja":
                //überlegen
                break;
            case "Nein":
                $excluded["Transaktionsbasiert"] = "Das Modell kommt für dich nicht in Frage, da eine technische Erfassung der Nutzung laut deinen Angaben zufolge nicht möglich ist";
                break;
        }
    }
}