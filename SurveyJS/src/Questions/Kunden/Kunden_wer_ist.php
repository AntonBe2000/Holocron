<?php


class Kunden_wer_ist extends Question
{
    public function calculate($value, &$factors, &$excluded)
    {
     switch ($value) 
     {
        case "DB Systel":
            $factors["Nutzer"][] = -5;
            $factors["Risiko Systel"][] = -10;
            $factors["Preisbereitschaft"][] = 9;
            $factors["Budgetsituation Kunde"][] = 9;
            $factors["Nutzungsabhängig"][] = 10;
            break;
        case "DB Cargo":
            $factors["Risiko Systel"][] = 3;
            $factors["Preisbereitschaft"][] = 5;
            $factors["Budgetsituation Kunde"][] = 5;
            $factors["Nutzungsabhängig"][] = 8;
            break;
        case "DB Regio":
            $factors["Nutzer"][] = 5;
            $factors["Risiko Systel"][] = 3;
            $factors["Preisbereitschaft"][] = 5;
            $factors["Budgetsituation Kunde"][] = 5;
            $factors["Nutzungsabhängig"][] = 5;
            break;
        case "DB Fernverkehr":
            $factors["Nutzer"][] = 5;
            $factors["Risiko Systel"][] = 5;
            $factors["Preisbereitschaft"][] = 10;
            $factors["Budgetsituation Kunde"][] = 10;
            $factors["Nutzungsabhängig"][] = 5;
            break;
        case "DB Netz":
            $factors["Risiko Systel"][] = -10;
            $factors["Preisbereitschaft"][] = 10;
            $factors["Budgetsituation Kunde"][] = 10;
            $factors["Nutzungsabhängig"][] = 5;
            break;
     }
    }
}