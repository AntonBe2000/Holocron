<?php


class Kunden_wer_ist extends Question
{
    public function calculate($value, &$factors, &$excluded)
    {
     switch ($value) 
     {
        case "DB Systel":
            $factors["Nutzer"]["values"][] = 0;
            $factors["Risiko Systel"]["values"][] = 0;
            $factors["Preisbereitschaft"]["values"][] = 9;
            $factors["Budgetsituation Kunde"]["values"][] = 9;
            $factors["Nutzungsabhängig"]["values"][] = 10;
            break;
        case "DB Cargo":
            $factors["Risiko Systel"]["values"][] = 3;
            $factors["Preisbereitschaft"]["values"][] = 5;
            $factors["Budgetsituation Kunde"]["values"][] = 5;
            $factors["Nutzungsabhängig"]["values"][] = 8;
            $excluded["Transaktionsbasiert"] = "DB Cargo hat dieses Preismodell in der Vergangenheit nicht akzeptiert.";
            break;
        case "DB Regio":
            $factors["Nutzer"]["values"][] = 5;
            $factors["Risiko Systel"]["values"][] = 3;
            $factors["Preisbereitschaft"]["values"][] = 5;
            $factors["Budgetsituation Kunde"]["values"][] = 5;
            $factors["Nutzungsabhängig"]["values"][] = 5;
            break;
        case "DB Fernverkehr":
            $factors["Nutzer"]["values"][] = 5;
            $factors["Risiko Systel"]["values"][] = 5;
            $factors["Preisbereitschaft"]["values"][] = 10;
            $factors["Budgetsituation Kunde"]["values"][] = 10;
            $factors["Nutzungsabhängig"]["values"][] = 5;
            break;
        case "DB Netz":
            $factors["Risiko Systel"]["values"][] = 10;
            $factors["Preisbereitschaft"]["values"][] = 10;
            $factors["Budgetsituation Kunde"]["values"][] = 10;
            $factors["Nutzungsabhängig"]["values"][] = 5;
            break;
     }
    }
}