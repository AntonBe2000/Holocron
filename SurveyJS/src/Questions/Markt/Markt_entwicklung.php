<?php


class Markt_entwicklung extends Question
{
    public function calculate($value, &$factors, &$excluded)
    {
        switch ($value) {
            case "Hohes Wachstum":
                $factors["Risiko Systel"][] = 0;
                $factors["Preisbereitschaft"][] = 10;
                $factors["Skalierbarkeit"][] = 10;
                $factors["Nutzungserfassung"][] = 10;
                break;
            case "Mittleres Wachstum":
                $factors["Risiko Systel"][] = 5;
                $factors["Preisbereitschaft"][] = 5;
                $factors["Skalierbarkeit"][] = 5;
                $factors["Nutzungserfassung"][] = 5;
                break;
            case "Markt stagniert":
                $factors["Risiko Systel"][] = 10;
                $factors["Preisbereitschaft"][] = 2;
                $factors["Skalierbarkeit"][] = 2;
                $factors["Nutzungserfassung"][] = 3;
                break;
        }
    }
}