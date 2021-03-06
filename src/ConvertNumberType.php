<?php

class ConvertNumberType
{
    /**
     * Convert an arabic number to roman numeral
     *
     * @param $number
     *
     * @return string
     */
    public function toRomanNumeral($number)
    {
        $numeral = '';

        $specialCases = [
            1000    => "M",
            900     => "CM",
            500     => "D",
            400     => "CD",
            100     => "C",
            90      => "XC",
            50      => "L",
            40      => "XL",
            10      => "X",
            9       => "IX",
            5       => "V",
            4       => "IV",
            1       => "I"
        ];

        foreach ($specialCases as $input => $output) {
            while ($number >= $input) {
                $numeral .= $output;
                $number -= $input;
            }
        }

        return $numeral;
    }
}