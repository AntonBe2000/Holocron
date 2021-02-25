<?php


class Technik_welche_erfassung extends Question
{
    public function calculate($value, &$factors, &$excluded)
    {
        switch ($value)
        {
            case "Pro Nutzung":
                $factors["Nutzungserfassung"]["values"][] = 10;
                break;
            case "Datenvolumen":
                $factors["Nutzungserfassung"]["values"][] = 7;
                break;
            case "Nutzungsdauer":
                $factors["Nutzungserfassung"]["values"][] = 5;
                break;
            case "Pro Nutzer":
                $factors["Nutzungserfassung"]["values"][] = 0;
                break;
        }
    }
}