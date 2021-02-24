    <?php


class Kundensit_nutzergruppen extends Question
{
    public function calculate($value, &$factors, &$excluded)
    {
        switch ($value) {
            case "Eine Nutzergruppe":
                $factors["Nutzer"][] = 1;
                $factors["Risiko Systel"][] = 7;
                $factors["Anzahl Nutzergruppen"][] = 1;
                $factors["Skalierbarkeit"][] = 1;
                $factors["Nutzungserfassung"][] = 1;
                break;
            case "Zwei Nutzergruppen":
                $factors["Nutzer"][] = 5;
                $factors["Risiko Systel"][] = 3;
                $factors["Anzahl Nutzergruppen"][] = 5;
                $factors["Skalierbarkeit"][] = 5;
                $factors["Nutzungserfassung"][] = 5;
                break;
            case "Mehr als zwei Nutzergruppen":
                $factors["Nutzer"][] = 7;
                $factors["Anzahl Nutzergruppen"][] = 7;
                $factors["Skalierbarkeit"][] = 7;
                $factors["Nutzungserfassung"][] = 7;
                break;
        }
    }
}