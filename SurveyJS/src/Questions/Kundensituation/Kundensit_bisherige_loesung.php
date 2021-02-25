<?php


class Kundensit_bisherige_loesung extends Question
{
    public function calculate($value, &$factors, &$excluded)
    {
        switch ($value)
        {
            case "Manueller Prozess":
                $factors["Nutzer"][] = 3;
                $factors["Risiko Kunde"][] = 0;
                $factors["Risiko Systel"][] = 0;
                $factors["Preisbereitschaft"][] = 7;
                break;
            case "Andere IT-Lösung":
                $factors["Nutzer"][] = 5;
                $factors["Risiko Systel"][] = 3;
                $factors["Preisbereitschaft"][] = 2;
                break;
            case "Sonstige, und zwar...":
                // Derzeit nichts zu tun
                break;
        }
    }
}