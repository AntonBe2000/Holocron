<?php


class Markt_vergleichbare_produkte extends Question
{
    public function calculate($value, &$factors, &$excluded)
    {
        switch ($value) {
            case "Ja":
                $factors["Preisbereitschaft"]["values"][] = 8;
                break;
            case "Nein":
                $factors["Preisbereitschaft"]["values"][] = 2;
                break;
        }
    }
}