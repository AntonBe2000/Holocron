<?php


class Kundensit_zahlungsbereitschaft extends Question
{
    public function calculate($value, &$factors, &$excluded)
    {
        switch ($value) {
            case "Ja":
                $factors["Preisbereitschaft"]["values"][] = 10;
                $factors["Budgetsituation Kunde"]["values"][] = 5;
                $factors["Nutzungsabhängig"]["values"][] = 10;
                break;
            case "Nein":
                $factors["Preisbereitschaft"]["values"][] = 1;
                $factors["Budgetsituation Kunde"]["values"][] = 3;
                $factors["Nutzungsabhängig"]["values"][] = 0;
                break;
        }
    }
}