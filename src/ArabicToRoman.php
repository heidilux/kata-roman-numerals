<?php

class ArabicToRoman
{
    public function toRomanNumeral($number)
    {
        if ($number >= 5 && $number %5 <= 3) {
            return "V" . str_repeat("I", $number %5);
        }

        $numeral =  str_repeat("I", $number);

        return $numeral;
    }
}