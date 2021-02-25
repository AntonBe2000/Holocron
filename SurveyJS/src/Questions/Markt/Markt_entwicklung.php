<?php


class Markt_entwicklung extends Question
{
    public function calculate($value, &$factors, &$excluded)
    {
        switch ($value) {
            case "Hohes Wachstum":
                $factors["Risiko Systel"]["values"][] = 0;
                $factors["Preisbereitschaft"]["values"][] = 10;
                $factors["Skalierbarkeit"]["values"][] = 10;
                $factors["Nutzungserfassung"]["values"][] = 10;
                break;
            case "Mittleres Wachstum":
                $factors["Risiko Systel"]["values"][] = 5;
                $factors["Preisbereitschaft"]["values"][] = 5;
                $factors["Skalierbarkeit"]["values"][] = 5;
                $factors["Nutzungserfassung"]["values"][] = 5;
                break;
            case "Markt stagniert":
                $factors["Risiko Systel"]["values"][] = 10;
                $factors["Preisbereitschaft"]["values"][] = 2;
                $factors["Skalierbarkeit"]["values"][] = 2;
                $factors["Nutzungserfassung"]["values"][] = 3;
                break;
        }
    }
}