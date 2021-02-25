<?php


class Kundensit_hoehe_risiko extends Question
{

    public function calculate($value, &$factors, &$excluded)
    {
        switch ($value)
        {
            case "1":
                $factors["Risiko Kunde"]["values"][] = 0;
                $factors["Risiko Systel"]["values"][] = 10;
                break;
            case "2":
                $factors["Risiko Systel"]["values"][] = 7;
                $factors["Risiko Kunde"]["values"][] = 3;
                break;
            case "3":
                $factors["Risiko Systel"]["values"][] = 5;
                $factors["Risiko Kunde"]["values"][] = 5;
                break;
            case "4":
                $factors["Risiko Systel"]["values"][] = 3;
                $factors["Risiko Kunde"]["values"][] = 7;
                break;
            case "5":
                $factors["Risiko Kunde"]["values"][] = 10;
                $factors["Risiko Systel"]["values"][] = 0;
                break;
        }
    }
}