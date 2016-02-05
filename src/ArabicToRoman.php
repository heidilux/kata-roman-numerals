<?php

class ArabicToRoman
{
    public function toRomanNumeral($number)
    {
        $numeral = '';

        if ($number >= 5) {
            $numeral .= "V";
            $number -= 5;
        }

        $numeral .= str_repeat("I", $number);
        return $numeral;
    }
}