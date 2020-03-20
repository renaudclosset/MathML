<?php

namespace MercurySolutions\MathML\Tests\Operator;

use MercurySolutions\MathML\Exception\DivisionByZeroException;
use MercurySolutions\MathML\Exception\ParameterCountException;
use MercurySolutions\MathML\Operator\OperatorDivide;

/**
 * Class OperatorDivideTest
 * @package Operator
 */
class OperatorDivideTest extends AbstractOperatorTest
{

    protected function setUp()
    {
        $this->createOperator(OperatorDivide::class);
    }

    public function testSimpleDivision()
    {
        $actual = $this->operator->calculate([12, 4]);
        $this->assertEquals($actual, 3);
    }

    public function testDivideByZero()
    {
        $this->expectException(DivisionByZeroException::class);
        $this->operator->calculate([36, 0]);
    }

    public function testTooFewParametersZero()
    {
        $this->expectException(ParameterCountException::class);
        $this->operator->calculate([]);
    }

    public function testTooFewParametersOne()
    {
        $this->expectException(ParameterCountException::class);
        $this->operator->calculate([1]);
    }

    public function testNullParameterMustReturnNull()
    {
        $this->assertNull($this->operator->calculate([10, null]));
    }
}
