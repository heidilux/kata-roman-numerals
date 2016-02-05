<?php

class ArabicToRoman
{
    public function toRomanNumeral($number)
    {
        $numeral = '';

        while ($number >= 5) {
            if ($number >= 50) {
                $numeral .= "L";
                $number -= 50;
            } elseif ($number >= 10) {
                $numeral .= "X";
                $number -= 10;
            } else {
                $numeral .= "V";
                $number -= 5;
            }
        }

        $numeral .= str_repeat("I", $number);
        return $numeral;
    }
}