<?php


class Technik_welche_erfassung extends Question
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
                case "Pro Nutzung":
                    $calculatedValue += 10;
                    break;
                case "Datenvolumen":
                    $calculatedValue += 7;
                    break;
                case "Nutzungsdauer":
                    $calculatedValue += 5;
                    break;
                case "Pro Nutzer":
                    $calculatedValue += 0;
                    break;
            }
        }
        $calculatedValue = round ($calculatedValue / $numberElements);
        $factors["Nutzungserfassung"]["values"][] = $calculatedValue;
    }
}