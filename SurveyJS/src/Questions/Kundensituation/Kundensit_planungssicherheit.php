<?php


class Kundensit_planungssicherheit extends Question
{
    public function calculate($value, &$factors, &$excluded)
    {
        switch ($value)
        {
            case "1":
                $factors["Risiko Kunde"]["values"][] = 10;
                $factors["Risiko Systel"]["values"][] = 10;
                $factors["Nutzungsabhängig"]["values"][] = 1;
                $factors["Nutzungserfassung"]["values"][] = 10;
                break;
            case "2":                
                $factors["Risiko Kunde"]["values"][] = 9;
                $factors["Risiko Systel"]["values"][] = 8;
                $factors["Nutzungsabhängig"]["values"][] = 2;
                $factors["Nutzungserfassung"]["values"][] = 8;
                break;
            case "3":                
                $factors["Risiko Kunde"]["values"][] = 7;
                $factors["Risiko Systel"]["values"][] = 7;
                $factors["Nutzungsabhängig"]["values"][] = 3;
                $factors["Nutzungserfassung"]["values"][] = 6;
                break;
            case "4":
                $factors["Risiko Kunde"]["values"][] = 5;
                $factors["Risiko Systel"]["values"][] = 5;
                $factors["Nutzungsabhängig"]["values"][] = 4;
                $factors["Nutzungserfassung"]["values"][] = 3;

                break;
            case "5":
                $factors["Risiko Kunde"]["values"][] = 3;
                $factors["Risiko Systel"]["values"][] = 3;
                $factors["Nutzungsabhängig"]["values"][] = 5;
                $factors["Nutzungserfassung"]["values"][] = 1;
                break;
        }
    }
}