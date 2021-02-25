<?php


class Kundensit_zusammenbrechen_service extends Question
{
    public function calculate($value, &$factors, &$excluded)
    {
        switch ($value)
        {
            case "1":
                $factors["Risiko Kunde"]["values"][] = 0;
                $factors["Risiko Systel"]["values"][] = 10;
                $factors["Preisbereitschaft"]["values"][] = 2;
                $factors["Bedürfnishäufigkeit"]["values"][] = 2;
                break;
            case "2":
                $factors["Risiko Kunde"]["values"][] = 3;
                $factors["Risiko Systel"]["values"][] = 7;
                $factors["Preisbereitschaft"]["values"][] = 3;
                $factors["Bedürfnishäufigkeit"]["values"][] = 4;
                break;
            case "3":
                $factors["Risiko Kunde"]["values"][] = 5;
                $factors["Risiko Systel"]["values"][] = 5;
                $factors["Preisbereitschaft"]["values"][] = 4;
                $factors["Bedürfnishäufigkeit"]["values"][] = 6;
                break;
            case "4":
                $factors["Risiko Kunde"]["values"][] = 7;
                $factors["Risiko Systel"]["values"][] = 3;
                $factors["Preisbereitschaft"]["values"][] = 6;
                $factors["Bedürfnishäufigkeit"]["values"][] = 8;
                break;
            case "5":
                $factors["Risiko Kunde"]["values"][] = 10;
                $factors["Risiko Systel"]["values"][] = 0;
                $factors["Preisbereitschaft"]["values"][] = 7;
                $factors["Bedürfnishäufigkeit"]["values"][] = 10;
                break;
        }
    }
}