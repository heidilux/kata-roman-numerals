<?php

class ArabicToRoman
{
    public function toRomanNumeral($number)
    {
        $numeral = '';

        $specialCases = [
            50  => "L",
            10  => "X",
            9   => "IX",
            5   => "V",
            4   => "IV"
        ];

        foreach ($specialCases as $input => $output) {
            while ($number >= $input) {
                $numeral .= $output;
                $number -= $input;
            }
        }

        $numeral .= str_repeat("I", $number);
        return $numeral;
    }
}