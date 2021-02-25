<?php


class Kundensit_bisherig_geeignet extends Question
{
    public function calculate($value, &$factors, &$excluded)
    {
        switch ($value)
        {
            case "1":
                $factors["Risiko Kunde"][] = 0;
                $factors["Risiko Systel"][] = 0;
                $factors["Preisbereitschaft"][] = 10;
                break;
            case "2":
                // $factors["Risiko Kunde"][] = -3;
                $factors["Risiko Systel"][] = 3;
                $factors["Preisbereitschaft"][] = 8;
                break;
            case "3":
                // $factors["Risiko Kunde"][] = -2;
                $factors["Risiko Systel"][] = 5;
                $factors["Preisbereitschaft"][] = -5;
                break;
            case "4":
                // $factors["Risiko Kunde"][] = -1;
                $factors["Risiko Systel"][] = 7;
                $factors["Preisbereitschaft"][] = -3;
                break;
            case "5":
                $factors["Risiko Systel"][] = 10;
                $factors["Preisbereitschaft"][] = 0;
                break;
        }
    }
}