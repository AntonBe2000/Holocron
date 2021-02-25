<?php


class Markt_eigenrealisierung extends Question
{
    public function calculate($value, &$factors, &$excluded)
    {
        switch ($value)
        {
            case "1":
                $factors["Risiko Systel"]["values"][] = 10;
                $factors["Preisbereitschaft"]["values"][] = 0;
                break;
            case "2":                
                $factors["Risiko Systel"]["values"][] = 8;
                $factors["Preisbereitschaft"]["values"][] = 2;
                $factors["Budgetsituation Kunde"]["values"][] = 2;
                break;
            case "3":                
                $factors["Risiko Systel"]["values"][] = 5;
                $factors["Preisbereitschaft"]["values"][] = 5;
                $factors["Budgetsituation Kunde"]["values"][] = 3;
                break;
            case "4":
                $factors["Risiko Systel"]["values"][] = 2;
                $factors["Preisbereitschaft"]["values"][] = 7;
                $factors["Budgetsituation Kunde"]["values"][] = 4;
                break;
            case "5":
                $factors["Risiko Systel"]["values"][] = 0;
                $factors["Preisbereitschaft"]["values"][] = 10;
                $factors["Budgetsituation Kunde"]["values"][] = 5;
                break;
        }
    }
}