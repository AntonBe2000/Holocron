<?php


class Kundensit_bisherige_loesung extends Question
{
    public function calculate($value, &$factors, &$excluded)
    {
        switch ($value)
        {
            case "Manueller Prozess":
                $factors["Nutzer"]["values"][] = 3;
                $factors["Risiko Kunde"]["values"][] = 0;
                $factors["Risiko Systel"]["values"][] = 0;
                $factors["Preisbereitschaft"]["values"][] = 7;
                break;
            case "Andere IT-Lösung":
                $factors["Nutzer"]["values"][] = 5;
                $factors["Risiko Systel"]["values"][] = 3;
                $factors["Preisbereitschaft"]["values"][] = 2;
                break;
            case "Sonstige, und zwar...":
                // Derzeit nichts zu tun
                break;
        }
    }
}