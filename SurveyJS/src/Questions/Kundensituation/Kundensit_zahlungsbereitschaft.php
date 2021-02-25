<?php


class Kundensit_zahlungsbereitschaft extends Question
{
    public function calculate($value, &$factors, &$excluded)
    {
        switch ($value) {
            case "Ja":
                $factors["Preisbereitschaft"][] = 10;
                $factors["Budgetsituation Kunde"][] = 5;
                $factors["Nutzungsabhängig"][] = 10;
                break;
            case "Nein":
                $factors["Preisbereitschaft"][] = 1;
                $factors["Budgetsituation Kunde"][] = 3;
                $factors["Nutzungsabhängig"][] = 0;
                break;
        }
    }
}