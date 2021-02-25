<?php


class Kundensit_bisherig_geeignet extends Question
{
    public function calculate($value, &$factors, &$excluded)
    {
        switch ($value)
        {
            case "1":
                $factors["Risiko Kunde"]["values"][] = 0;
                $factors["Risiko Systel"]["values"][] = 0;
                $factors["Preisbereitschaft"]["values"][] = 10;
                break;
            case "2":
                // $factors["Risiko Kunde"]["values"][] = -3;
                $factors["Risiko Systel"]["values"][] = 3;
                $factors["Preisbereitschaft"]["values"][] = 8;
                break;
            case "3":
                // $factors["Risiko Kunde"]["values"][] = -2;
                $factors["Risiko Systel"]["values"][] = 5;
                $factors["Preisbereitschaft"]["values"][] = -5;
                break;
            case "4":
                // $factors["Risiko Kunde"]["values"][] = -1;
                $factors["Risiko Systel"]["values"][] = 7;
                $factors["Preisbereitschaft"]["values"][] = -3;
                break;
            case "5":
                $factors["Risiko Systel"]["values"][] = 10;
                $factors["Preisbereitschaft"]["values"][] = 0;
                break;
        }
    }
}