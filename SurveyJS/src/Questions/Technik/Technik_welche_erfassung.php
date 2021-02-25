<?php


class Technik_welche_erfassung extends Question
{
    public function calculate($value, &$factors, &$excluded)
    {
        switch ($value)
        {
            case "Pro Nutzung":
                $factors["Nutzungserfassung"][] = 10;
                break;
            case "Datenvolumen":
                $factors["Nutzungserfassung"][] = 7;
                break;
            case "Nutzungsdauer":
                $factors["Nutzungserfassung"][] = 5;
                break;
            case "Pro Nutzer":
                $factors["Nutzungserfassung"][] = 0;
                break;
        }
    }
}