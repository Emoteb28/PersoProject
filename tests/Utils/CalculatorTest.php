<?php

namespace App\Tests\Utils;

use App\Utils\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testAddition()
    {
        $calculator = new Calculator();
        $result = $calculator->add('8', '2');
        $this->assertEquals(10, $result);
    }

    public function testSoustract()
    {
        $calculator = new Calculator();
        $result = $calculator->remove('8', '2');
        $this->assertEquals(6, $result);
        $this->assertEquals(0, $result);
    }
}
