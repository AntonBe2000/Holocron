<?php


class Netzwerk_kunden_kooperation extends Question
{
    public function calculate($value, &$factors, &$excluded)
    {
        switch ($value) {
            case "Eigenständig":
                $factors["Risiko Kunde"][] = 10;
                $factors["Risiko Systel"][] = 10;
                $factors["Preisbereitschaft"][] = 0;
                break;
            case "Anfinanziert":
                $factors["Risiko Systel"][] = 0;
                $factors["Preisbereitschaft"][] = 10;
                break;
            case "Kooperation":
                $factors["Risiko Kunde"][] = 5;
                $factors["Risiko Systel"][] = 5;
                $factors["Preisbereitschaft"][] = 5;
                break;
        }
    }
}