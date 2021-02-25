<?php


class Kundensit_loesung_aufwaendig extends Question
{
    public function calculate($value, &$factors, &$excluded)
    {
        switch ($value)
        {
            case "1":
                $factors["Risiko Systel"][] = 0;
                $factors["Preisbereitschaft"][] = 0;
                $factors["Budgetsituation Kunde"][] = 0;
                break;
            case "2":
                // $factors["Risiko Kunde"][] = -2;
                $factors["Risiko Systel"][] = 2;
                $factors["Preisbereitschaft"][] = 2;
                $factors["Budgetsituation Kunde"][] = 2;
                break;
            case "3":
                // $factors["Risiko Kunde"][] = -3;
                $factors["Risiko Systel"][] = 3;
                $factors["Preisbereitschaft"][] = 5;
                $factors["Budgetsituation Kunde"][] = 3;
                break;
            case "4":
                // $factors["Risiko Kunde"][] = -4;
                $factors["Risiko Systel"][] = 4;
                $factors["Preisbereitschaft"][] = 7;
                $factors["Budgetsituation Kunde"][] = 4;
                break;
            case "5":
                $factors["Risiko Kunde"][] = 0;
                $factors["Risiko Systel"][] = 5;
                $factors["Preisbereitschaft"][] = 10;
                $factors["Budgetsituation Kunde"][] = 5;
                break;
        }
    }
}