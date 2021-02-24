<?php


class Kundensit_zusammenbrechen_service extends Question
{
    public function calculate($value, &$factors, &$excluded)
    {
        switch ($value)
        {
            case "1":
                $factors["Risiko Systel"][] = 10;
                $factors["Preisbereitschaft"][] = 2;
                $factors["Bedürfnishäufigkeit"][] = 2;
                break;
            case "2":
                $factors["Risiko Systel"][] = 7;
                $factors["Preisbereitschaft"][] = 3;
                $factors["Bedürfnishäufigkeit"][] = 4;
                break;
            case "3":
                $factors["Risiko Systel"][] = 5;
                $factors["Preisbereitschaft"][] = 4;
                $factors["Bedürfnishäufigkeit"][] = 6;
                break;
            case "4":
                $factors["Risiko Systel"][] = 3;
                $factors["Preisbereitschaft"][] = 6;
                $factors["Bedürfnishäufigkeit"][] = 8;
                break;
            case "5":
                $factors["Preisbereitschaft"][] = 7;
                $factors["Bedürfnishäufigkeit"][] = 10;
                break;
        }
    }
}