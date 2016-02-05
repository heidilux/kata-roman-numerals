<?php

class ArabicToRomanTest extends PHPUnit_Framework_TestCase
{
    protected $convert;

    public function setUp()
    {
        $this->convert = new ConvertNumberType();
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

    public function testItReturnsIVWhenPassed4()
    {
        $this->assertEquals("IV", $this->convert->toRomanNumeral(4));
    }

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

    public function testItReturnsIXWhenPassed9()
    {
        $this->assertEquals("IX", $this->convert->toRomanNumeral(9));
    }

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

    public function testItReturnsXXWhenPassed20()
    {
        $this->assertEquals("XX", $this->convert->toRomanNumeral(20));
    }

    public function testItReturnsLWhenPassed50()
    {
        $this->assertEquals("L", $this->convert->toRomanNumeral(50));
    }

    public function testItReturnsCWhenPassed100()
    {
        $this->assertEquals("C", $this->convert->toRomanNumeral(100));
    }

    public function testItReturnsDWhenPassed500()
    {
        $this->assertEquals("D", $this->convert->toRomanNumeral(500));
    }

    public function testItReturnsMWhenPassed1000()
    {
        $this->assertEquals("M", $this->convert->toRomanNumeral(1000));
    }

    public function testItReturnsMCMXCIXWhenPassed1999()
    {
        $this->assertEquals("MCMXCIX", $this->convert->toRomanNumeral(1999));
    }

    public function testItReturnsMXLVIWhenPassed1066()
    {
        $this->assertEquals("MLXVI", $this->convert->toRomanNumeral(1066));
    }

    public function testItReturnsMCMLXXXIXWhenPassed1989()
    {
        $this->assertEquals("MCMLXXXIX", $this->convert->toRomanNumeral(1989));
    }
}