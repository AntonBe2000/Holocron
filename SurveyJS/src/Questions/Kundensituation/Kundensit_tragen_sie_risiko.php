<?php


class Kundensit_tragen_sie_risiko extends Question
{
    public function calculate($value, &$factors, &$excluded)
    {
        switch ($value)
        {
            case "Ja, alle":
                $factors["Risiko Systel"][] = 10;
                $factors["Anzahl Nutzergruppen"][] = 5;
                break;
            case "Die meisten":
                $factors["Risiko Systel"][] = 7;
                $factors["Anzahl Nutzergruppen"][] = 4;
                break;
            case "Die wenigsten":
                $factors["Risiko Systel"][] = 5;
                $factors["Anzahl Nutzergruppen"][] = 2;
                break;
            case "Nein, keiner":
                $factors["Risiko Systel"][] = 3;
                $factors["Anzahl Nutzergruppen"][] = 1;
                break;
        }
    }
}