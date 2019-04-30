<?php

namespace MercurySolutions\MathML\Tests\Operator;

use MercurySolutions\MathML\Exception\ParameterCountException;
use MercurySolutions\MathML\Operator\OperatorPower;

/**
 * Class OperatorPowerTest
 * @package MercurySolutions\MathML\Tests\Operator
 */
class OperatorPowerTest extends AbstractOperatorTest
{
    protected function setUp()
    {
        $this->createOperator(OperatorPower::class);
    }

    public function testSimpleClosure()
    {
        $this->assertEquals(
            25,
            $this->operator->calculate([5,2])
        );
    }

    public function testNoParameters()
    {
        $this->expectException(ParameterCountException::class);
        $this->operator->calculate([]);
    }

    public function testOneParameter()
    {
        $this->expectException(ParameterCountException::class);
        $this->operator->calculate([0]);
    }

    public function testTooManyParameters()
    {
        $this->expectException(ParameterCountException::class);
        $this->operator->calculate([0,9,1]);
    }
}
