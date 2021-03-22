<?php


class Nutzen_wie_erfolgt extends Question
{
    public function calculate($value, &$factors, &$excluded)
    {
        $comboboxValues = explode("#", $value);
        $numberElements = count($comboboxValues);
        $calculatedValue = 0;
        for ($i=0; $i < $numberElements; $i++)
        {
            switch ($comboboxValues[$i])
            {
                case "1":
                    $calculatedValue += 1;
                    break;
                case "2":
                    $calculatedValue += 3;
                    break;
                case "3":
                    $calculatedValue += 5;
                    break;
                case "4":
                    $calculatedValue += 8;
                    break;
                case "5":
                    $calculatedValue += 10;
                    break;
            }
        }
        $calculatedValue = round ($calculatedValue / $numberElements);
        $factors["Bedürfnishäufigkeit"]["values"][] = $calculatedValue;

    }
}