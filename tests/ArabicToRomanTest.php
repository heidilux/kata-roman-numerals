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

//    public function testItReturnsIVWhenPassed4()
//    {
//        $this->assertEquals("IV", $this->convert->toRomanNumeral(4));
//    }

    public function testItReturnsVWhenPassed5()
    {
        $this->assertEquals("V", $this->convert->toRomanNumeral(5));
    }

    public function testItReturnsVIWhenPassed6()
    {
        $this->assertEquals("VI", $this->convert->toRomanNumeral(6));
    }

    public function testItReturnsVIIWhenPassed7()
    {
        $this->assertEquals("VII", $this->convert->toRomanNumeral(7));
    }

    public function testItReturnsVIIIWhenPassed8()
    {
        $this->assertEquals("VIII", $this->convert->toRomanNumeral(8));
    }

//    S

    public function testItReturnsXWhenPassed10()
    {
        $this->assertEquals("X", $this->convert->toRomanNumeral(10));
    }

    public function testItReturnsXIWhenPassed11()
    {
        $this->assertEquals("XI", $this->convert->toRomanNumeral(11));
        $this->assertEquals("XII", $this->convert->toRomanNumeral(12));
        $this->assertEquals("XIII", $this->convert->toRomanNumeral(13));
    }
}