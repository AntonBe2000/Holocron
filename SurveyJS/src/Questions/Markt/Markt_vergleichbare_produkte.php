<?php


class Markt_vergleichbare_produkte extends Question
{
    public function calculate($value, &$factors, &$excluded)
    {
        switch ($value) {
            case "Ja":
                $factors["Preisbereitschaft"][] = 8;
                $factors["Modell_am_Markt"][] = 10;
                break;
            case "Nein":
                $factors["Preisbereitschaft"][] = 2;
                $factors["Modell_am_Markt"][] = -10;
                break;
        }
    }
}