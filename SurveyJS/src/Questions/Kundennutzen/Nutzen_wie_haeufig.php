<?php


class Nutzen_wie_haeufig extends Question
{
    public function calculate($value, &$factors, &$excluded)
    {
        // TODO: Implement calculate() method.
        $factors["Bedürfnishäufigkeit"][] = ($value / self::QUESTION_SCALE) * self::FACTOR_SCALE;
    }
}