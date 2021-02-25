<?php


class Kundensit_budgetsituation extends Question
{
    public function calculate($value, &$factors, &$excluded)
    {
        switch ($value)
        {
            case "1":
                $factors["Preisbereitschaft"][] = 1;
                $factors["Budgetsituation Kunde"][] = 1;
                break;
            case "2":                
                $factors["Preisbereitschaft"][] = 3;
                $factors["Budgetsituation Kunde"][] = 3;
                break;
            case "3":             
                $factors["Preisbereitschaft"][] = 5;   
                $factors["Budgetsituation Kunde"][] = 5;
                break;
            case "4":
                $factors["Preisbereitschaft"][] = 8;                
                $factors["Budgetsituation Kunde"][] = 8;
                break;
            case "5":
                $factors["Preisbereitschaft"][] = 10;               
                $factors["Budgetsituation Kunde"][] = 10;
                break;
        }
    }
}