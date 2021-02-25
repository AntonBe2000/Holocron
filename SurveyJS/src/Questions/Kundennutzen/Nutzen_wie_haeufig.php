<?php


class Nutzen_wie_haeufig extends Question
{
    public function calculate($value, &$factors, &$excluded)
    {
        switch ($value)
        {
            case "1":
                $factors["Bedürfnishäufigkeit"]["values"][] = 1;
                break;
            case "2":
                $factors["Bedürfnishäufigkeit"]["values"][] = 3;
                break;
            case "3":
                $factors["Bedürfnishäufigkeit"]["values"][] = 5;
                break;
            case "4":
                $factors["Bedürfnishäufigkeit"]["values"][] = 8;
                break;
            case "5":
                $factors["Bedürfnishäufigkeit"]["values"][] = 10;
                break;
        }
    }
}