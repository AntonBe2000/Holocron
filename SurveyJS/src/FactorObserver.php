<?php

class FactorObserver implements SplObserver
{
    private $factors = [
        "Nutzer" => ["values" => [], "multiplier" => 1],
        "Risiko Kunde" => ["values" => [], "multiplier" => 1],
        "Risiko Systel" => ["values" => [], "multiplier" => 1],
        "Preisbereitschaft" => ["values" => [], "multiplier" => 1],
        "Anzahl Nutzergruppen" => ["values" => [], "multiplier" => 1],
        "Budgetsituation Kunde" => ["values" => [], "multiplier" => 1],
        "Bedürfnishäufigkeit" => ["values" => [], "multiplier" => 1],
        "Skalierbarkeit" => ["values" => [], "multiplier" => 1],
        "Nutzungsabhängig" => ["values" => [],  "multiplier" => 1],
        "Erfahrung_Kunde" => ["values" => [], "multiplier" => 1],
        "Nutzungserfassung" => ["values" => [], "multiplier" => 1],
        "Modell_am_Markt" => ["values" => [], "multiplier" => 1]
    ];
    private $excluded  = [];

    public function getFactors()
    {
        return $this->factors;
    }

    public function update(SplSubject $answer)
    {
        $this->calculate($answer->getKey(), $answer->getValue());
    }

    public function calculate(string $questionKey, $value)
    {
        if( ! class_exists(ucfirst($questionKey))) {
            return;
        }

        $class = ucfirst($questionKey);
        $class = new $class();
        $class->calculate($value, $this->factors, $this->excluded);
    }

    public function getExcluded()
    {
        return $this->excluded;
    }
}