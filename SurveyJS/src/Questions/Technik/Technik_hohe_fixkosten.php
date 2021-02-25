<?php


class Technik_hohe_fixkosten extends Question
{
    public function calculate($value, &$factors, &$excluded)
    {
        switch ($value)
        {
            case "1":
                $factors["Risiko Systel"][] = 1;
                $factors["Nutzungsabhängig"][] = 0;
                break;
            case "2":                
                $factors["Risiko Systel"][] = 3;
                $factors["Nutzungsabhängig"][] = 1;
                break;
            case "3":                
                $factors["Risiko Systel"][] = 5;
                $factors["Nutzungsabhängig"][] = 2;
                break;
            case "4":
                $factors["Risiko Systel"][] = 8;
                break;
            case "5":
                $factors["Risiko Systel"][] = 10;
                break;
        }
    }
}