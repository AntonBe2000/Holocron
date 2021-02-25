<?php


class Technik_hohe_fixkosten extends Question
{
    public function calculate($value, &$factors, &$excluded)
    {
        switch ($value)
        {
            case "1":
                $factors["Risiko Systel"]["values"][] = 1;
                $factors["Nutzungsabhängig"]["values"][] = 0;
                break;
            case "2":                
                $factors["Risiko Systel"]["values"][] = 3;
                $factors["Nutzungsabhängig"]["values"][] = 1;
                break;
            case "3":                
                $factors["Risiko Systel"]["values"][] = 5;
                $factors["Nutzungsabhängig"]["values"][] = 2;
                break;
            case "4":
                $factors["Risiko Systel"]["values"][] = 8;
                break;
            case "5":
                $factors["Risiko Systel"]["values"][] = 10;
                break;
        }
    }
}