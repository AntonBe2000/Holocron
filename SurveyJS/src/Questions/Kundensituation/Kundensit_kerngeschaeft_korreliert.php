<?php


class Kundensit_kerngeschaeft_korreliert extends Question
{
    public function calculate($value, &$factors, &$excluded)
    {
        switch ($value)
        {
            case "1":
                $factors["Risiko Kunde"][] = 0;
                $factors["Risiko Systel"][] = 10;
                $factors["Preisbereitschaft"][] = 0;
                $factors["Budgetsituation Kunde"][] = 0;
                break;
            case "2":
                $factors["Risiko Kunde"][] = 3;
                $factors["Risiko Systel"][] = 7;
                $factors["Preisbereitschaft"][] = 1;
                $factors["Budgetsituation Kunde"][] = 3;
                break;
            case "3":
                $factors["Risiko Kunde"][] = 5;
                $factors["Risiko Systel"][] = 5;
                $factors["Preisbereitschaft"][] = 2;
                $factors["Budgetsituation Kunde"][] = 5;
                break;
            case "4":
                $factors["Risiko Kunde"][] = 8;
                $factors["Risiko Systel"][] = 3;
                $factors["Preisbereitschaft"][] = 3;
                $factors["Budgetsituation Kunde"][] = 7;
                break;
            case "5":
                $factors["Risiko Kunde"][] = 10;
                $factors["Risiko Systel"][] = 0;
                $factors["Preisbereitschaft"][] = 5;
                $factors["Budgetsituation Kunde"][] = 10;
                break;
        }
    }
}