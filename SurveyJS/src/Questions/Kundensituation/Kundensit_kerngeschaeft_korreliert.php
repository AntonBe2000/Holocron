<?php


class Kundensit_kerngeschaeft_korreliert extends Question
{
    public function calculate($value, &$factors, &$excluded)
    {
        switch ($value)
        {
            case "1":
                $factors["Risiko Systel"][] = 10;
                $factors["Preisbereitschaft"][] = -5;
                break;
            case "2":
                $factors["Risiko Systel"][] = 7;
                $factors["Preisbereitschaft"][] = -2;
                $factors["Budgetsituation Kunde"][] = 3;
                break;
            case "3":
                $factors["Risiko Systel"][] = 5;
                $factors["Budgetsituation Kunde"][] = 5;
                break;
            case "4":
                $factors["Risiko Systel"][] = 3;
                $factors["Preisbereitschaft"][] = 2;
                $factors["Budgetsituation Kunde"][] = 7;
                break;
            case "5":
                $factors["Preisbereitschaft"][] = 5;
                $factors["Budgetsituation Kunde"][] = 10;
                break;
        }
    }
}