<?php

require('vendor/autoload.php');

$number = 1;

$convert = new ArabicToRoman();

$result = $convert->toRomanNumeral($number);

echo $result;