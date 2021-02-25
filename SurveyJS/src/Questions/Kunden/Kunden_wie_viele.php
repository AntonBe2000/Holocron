<?php


class Kunden_wie_viele extends Question
{
    public function calculate($value, &$factors, &$excluded)
    {
        switch ($value)
        {
            case "1":
                $factors["Risiko Systel"][] = 2;
                $factors["Anzahl Nutzergruppen"][] = 0;
                break;
            case "2-10":
                $factors["Risiko Systel"][] = 3;
                $factors["Anzahl Nutzergruppen"][] = 3;
                $factors["Nutzungserfassung"][] = 2;
                break;
            case "10-100":
                $factors["Risiko Systel"][] = 4;
                $factors["Anzahl Nutzergruppen"][] = 7;
                $factors["Nutzungserfassung"][] = 5;
                break;
            case "Mehr als 100":
                $factors["Risiko Systel"][] = 5;
                $factors["Anzahl Nutzergruppen"][] = 10;
                $factors["Nutzungserfassung"][] = 8;
                break;
        }
    }
}