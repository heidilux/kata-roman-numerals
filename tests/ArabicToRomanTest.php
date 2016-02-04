<?php

class ArabicToRomanTest extends PHPUnit_Framework_TestCase
{
    protected $convert;

    public function setUp()
    {
        $this->convert = new ArabicToRoman();
    }
    public function testItReturnIWhenPassed1()
    {
        $this->assertEquals("I", $this->convert->toRomanNumeral(1));
    }
}