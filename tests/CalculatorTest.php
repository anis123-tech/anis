<?php

namespace TDD;

require dirname(__FILE__, 2) . DIRECTORY_SEPARATOR . "vendor" . DIRECTORY_SEPARATOR . "autoload.php";

use PHPUnit\Framework\TestCase;
use TDD\Calculator;

class CalculatorTest extends TestCase
{
    public function testTotal() {
        $calculator = new Calculator();
        $this->assertEquals(
            913,
            $calculator->sumArray(array(144, 245, 23, 245, 167, 89)),
            "Expecting a result of 913, when the array is counted"
        );
    }

    public function testBtw() {
        $calculator = new Calculator();
        $this->assertEquals(
            144 / 100 * 121,
            $calculator->calcBtw(144),
            "Expecting 21% to be added to 144."
        );
    }
}