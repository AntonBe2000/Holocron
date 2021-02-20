<?php

class Preismodell
{
    public function calculate($factors)
    {
        //Matrizenvergleich
        $pricingModels = json_decode(file_get_contents(__DIR__ . "/../public/pricingModels.json"));
        $summen = [];
        foreach ($pricingModels as $pricingModel => $pricingModelFactors) {
            $summen[$pricingModel] = $this->getSumForPricingModel($pricingModelFactors, $factors);
        }
        asort($summen);
        return $summen;
    }

    private function getSumForPricingModel($pricingModelFactors, $factors)
    {
        $sum = 0;
        foreach ($pricingModelFactors as $pricingModelFactor => $factorValue) {
            $calculatedFactor = $factors[$pricingModelFactor];

            if (empty($calculatedFactor["values"])) {
                $sum += $calculatedFactor["multiplier"] * $factorValue;
                continue;
            }

            $value = array_sum($calculatedFactor["values"]) / count($calculatedFactor["values"]);
            $sum += $calculatedFactor["multiplier"] * abs($value - $factorValue);
        }
        return $sum;
    }
}