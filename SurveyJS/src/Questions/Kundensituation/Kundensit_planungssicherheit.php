<?php


class Kundensit_planungssicherheit extends QuestionWithUnknown
{

    public function calculate($value, &$factors, &$excluded)
    {
        $factors["Preisstabilität"][] = ($value / self::QUESTION_SCALE) * self::FACTOR_SCALE;
    }
}