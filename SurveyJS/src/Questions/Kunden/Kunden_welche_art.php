<?php


class Kunden_welche_art extends Question
{
    public function calculate($value, &$factors, &$excluded)
    {
        switch ($value) {
            case "Endkunden außerhalb Konzern":
                $factors["Nutzen"]["values"][] = 8;
                break;
            case "Mitarbeiter der DB Systel":
                $factors["Nutzer"]["values"][] = 2;
                break;
            case "Mitarbeiter mehrerer Tochterunternehmen des DB Konzerns":
                $factors["Nutzer"]["values"][] = 6;
                break;
            case "Mitarbeiter eines Tochterunternehmens":
                $factors["Nutzer"]["values"][] = 3;
                break;
        }
    }
}