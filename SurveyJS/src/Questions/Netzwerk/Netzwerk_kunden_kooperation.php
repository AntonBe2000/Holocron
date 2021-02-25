<?php


class Netzwerk_kunden_kooperation extends Question
{
    public function calculate($value, &$factors, &$excluded)
    {
        switch ($value) {
            case "Eigenständig":
                $factors["Risiko Kunde"]["values"][] = 10;
                $factors["Risiko Systel"]["values"][] = 10;
                $factors["Preisbereitschaft"]["values"][] = 0;
                break;
            case "Anfinanziert":
                $factors["Risiko Systel"]["values"][] = 0;
                $factors["Preisbereitschaft"]["values"][] = 10;
                break;
            case "Kooperation":
                $factors["Risiko Kunde"]["values"][] = 5;
                $factors["Risiko Systel"]["values"][] = 5;
                $factors["Preisbereitschaft"]["values"][] = 5;
                break;
        }
    }
}