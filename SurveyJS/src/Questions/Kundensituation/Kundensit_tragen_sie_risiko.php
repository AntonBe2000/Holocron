<?php


class Kundensit_tragen_sie_risiko extends Question
{
    public function calculate($value, &$factors, &$excluded)
    {
        switch ($value)
        {
            case "Ja, alle":
                $factors["Risiko Systel"]["values"][] = 10;
                $factors["Anzahl Nutzergruppen"]["values"][] = 5;
                break;
            case "Die meisten":
                $factors["Risiko Systel"]["values"][] = 7;
                $factors["Anzahl Nutzergruppen"]["values"][] = 4;
                break;
            case "Die wenigsten":
                $factors["Risiko Systel"]["values"][] = 5;
                $factors["Anzahl Nutzergruppen"]["values"][] = 2;
                break;
            case "Nein, keiner":
                $factors["Risiko Systel"]["values"][] = 3;
                $factors["Anzahl Nutzergruppen"]["values"][] = 1;
                break;
        }
    }
}