<?php


class Kunden_wie_viele extends Question
{
    public function calculate($value, &$factors, &$excluded)
    {
        switch ($value)
        {
            case "1":
                $factors["Risiko Systel"]["values"][] = 2;
                $factors["Anzahl Nutzergruppen"]["values"][] = 0;
                break;
            case "2-10":
                $factors["Risiko Systel"]["values"][] = 3;
                $factors["Anzahl Nutzergruppen"]["values"][] = 3;
                $factors["Nutzungserfassung"]["values"][] = 2;
                break;
            case "10-100":
                $factors["Risiko Systel"]["values"][] = 4;
                $factors["Anzahl Nutzergruppen"]["values"][] = 7;
                $factors["Nutzungserfassung"]["values"][] = 5;
                break;
            case "Mehr als 100":
                $factors["Risiko Systel"]["values"][] = 5;
                $factors["Anzahl Nutzergruppen"]["values"][] = 10;
                $factors["Nutzungserfassung"]["values"][] = 8;
                break;
        }
    }
}