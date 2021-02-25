<?php


class Nutzen_wie_erfolgt extends Question
{
    public function calculate($value, &$factors, &$excluded)
    {
        switch ($value)
        {
            case "1":
                $factors["Bedürfnishäufigkeit"][] = 1;
                break;
            case "2":
                $factors["Bedürfnishäufigkeit"][] = 3;
                break;
            case "3":
                $factors["Bedürfnishäufigkeit"][] = 5;
                break;
            case "4":
                $factors["Bedürfnishäufigkeit"][] = 8;
                break;
            case "5":
                $factors["Bedürfnishäufigkeit"][] = 10;
                break;
        }
    }
}