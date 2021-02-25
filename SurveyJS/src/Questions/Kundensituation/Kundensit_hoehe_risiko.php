<?php


class Kundensit_hoehe_risiko extends Question
{

    public function calculate($value, &$factors, &$excluded)
    {
        switch ($value)
        {
            case "1":
                $factors["Risiko Kunde"][] = 0;
                $factors["Risiko Systel"][] = 10;
                break;
            case "2":
                $factors["Risiko Systel"][] = 7;
                $factors["Risiko Kunde"][] = 3;
                break;
            case "3":
                $factors["Risiko Systel"][] = 5;
                $factors["Risiko Kunde"][] = 5;
                break;
            case "4":
                $factors["Risiko Systel"][] = 3;
                $factors["Risiko Kunde"][] = 7;
                break;
            case "5":
                $factors["Risiko Kunde"][] = 10;
                $factors["Risiko Systel"][] = 0;
                break;
        }
    }
}