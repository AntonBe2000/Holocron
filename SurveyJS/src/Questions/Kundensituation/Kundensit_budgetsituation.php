<?php


class Kundensit_budgetsituation extends Question
{
    public function calculate($value, &$factors, &$excluded)
    {
        switch ($value)
        {
            case "1":
                $factors["Preisbereitschaft"]["values"][] = 1;
                $factors["Budgetsituation Kunde"]["values"][] = 1;
                break;
            case "2":                
                $factors["Preisbereitschaft"]["values"][] = 3;
                $factors["Budgetsituation Kunde"]["values"][] = 3;
                break;
            case "3":             
                $factors["Preisbereitschaft"]["values"][] = 5;   
                $factors["Budgetsituation Kunde"]["values"][] = 5;
                break;
            case "4":
                $factors["Preisbereitschaft"]["values"][] = 8;                
                $factors["Budgetsituation Kunde"]["values"][] = 8;
                break;
            case "5":
                $factors["Preisbereitschaft"]["values"][] = 10;               
                $factors["Budgetsituation Kunde"]["values"][] = 10;
                break;
        }
    }
}