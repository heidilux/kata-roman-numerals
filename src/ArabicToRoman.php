<?php

class ArabicToRoman
{
    public function toRomanNumeral($number)
    {
        $numeral = '';

        while ($number >= 4) {
            if ($number >= 50) {
                $numeral .= "L";
                $number -= 50;
            } elseif ($number >= 10) {
                $numeral .= "X";
                $number -= 10;
            } elseif ($number >= 9) {
                $numeral .= "IX";
                $number -= 9;
            } elseif ($number >= 5) {
                $numeral .= "V";
                $number -= 5;
            } elseif ($number >= 4) {
                $numeral .= "IV";
                $number -= 4;
            }
        }

        $numeral .= str_repeat("I", $number);
        return $numeral;
    }
}