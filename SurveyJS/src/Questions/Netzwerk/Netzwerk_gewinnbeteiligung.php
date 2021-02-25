<?php


class Netzwerk_gewinnbeteiligung extends Question
{
    public function calculate($value, &$factors, &$excluded)
    {
        //erst sinnvoll wenn Value-Sharing als Preismodell mit aufgenommen wird
        switch ($value)
        {
            case "Nein": 
                $excluded["Inhaltsbasiert"] = "Dieses Preismodell wurde ausgeschlossen, weil die Mehrzahl der Kunden keine Beteiligung an ihrem Gewinn anbieten.";
                break;
        }
    }
}