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

    public function testItReturnsIIWhenPassed2()
    {
        $this->assertEquals("II", $this->convert->toRomanNumeral(2));
    }

    public function testItReturnsIIIWhenPassed3()
    {
        $this->assertEquals("III", $this->convert->toRomanNumeral(3));
    }
}