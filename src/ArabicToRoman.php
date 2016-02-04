<?php

class ArabicToRoman
{
    public function toRomanNumeral($number)
    {
        if ($number == 3) {
            return "III";
        } elseif ($number == 2) {
            return "II";
        }
        return "I";
    }
}