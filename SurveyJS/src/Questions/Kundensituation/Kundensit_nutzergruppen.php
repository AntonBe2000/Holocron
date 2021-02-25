    <?php


class Kundensit_nutzergruppen extends Question
{
    public function calculate($value, &$factors, &$excluded)
    {
        switch ($value) {
            case "Eine Nutzergruppe":
                $factors["Nutzer"]["values"][] = 1;
                $factors["Risiko Systel"]["values"][] = 7;
                $factors["Anzahl Nutzergruppen"]["values"][] = 1;
                $factors["Skalierbarkeit"]["values"][] = 1;
                $factors["Nutzungserfassung"]["values"][] = 1;
                break;
            case "Zwei Nutzergruppen":
                $factors["Nutzer"]["values"][] = 5;
                $factors["Risiko Systel"]["values"][] = 3;
                $factors["Anzahl Nutzergruppen"]["values"][] = 5;
                $factors["Skalierbarkeit"]["values"][] = 5;
                $factors["Nutzungserfassung"]["values"][] = 5;
                break;
            case "Mehr als zwei Nutzergruppen":
                $factors["Nutzer"]["values"][] = 7;
                $factors["Anzahl Nutzergruppen"]["values"][] = 7;
                $factors["Skalierbarkeit"]["values"][] = 7;
                $factors["Nutzungserfassung"]["values"][] = 7;
                break;
        }
    }
}