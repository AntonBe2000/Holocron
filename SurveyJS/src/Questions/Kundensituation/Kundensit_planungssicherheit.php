<?php


class Kundensit_planungssicherheit extends Question
{
    public function calculate($value, &$factors, &$excluded)
    {
        switch ($value)
        {
            case "1":
                $factors["Risiko Kunde"][] = 10;
                $factors["Risiko Systel"][] = 10;
                $factors["Nutzungsabhängig"][] = 1;
                $factors["Nutzungserfassung"][] = 10;
                break;
            case "2":                
                $factors["Risiko Kunde"][] = 9;
                $factors["Risiko Systel"][] = 8;
                $factors["Nutzungsabhängig"][] = 2;
                $factors["Nutzungserfassung"][] = 8;
                break;
            case "3":                
                $factors["Risiko Kunde"][] = 7;
                $factors["Risiko Systel"][] = 7;
                $factors["Nutzungsabhängig"][] = 3;
                $factors["Nutzungserfassung"][] = 6;
                break;
            case "4":
                $factors["Risiko Kunde"][] = 5;
                $factors["Risiko Systel"][] = 5;
                $factors["Nutzungsabhängig"][] = 4;
                $factors["Nutzungserfassung"][] = 3;

                break;
            case "5":
                $factors["Risiko Kunde"][] = 3;
                $factors["Risiko Systel"][] = 3;
                $factors["Nutzungsabhängig"][] = 5;
                $factors["Nutzungserfassung"][] = 1;
                break;
        }
    }
}