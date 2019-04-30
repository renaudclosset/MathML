<?php

namespace MercurySolutions\MathML\Tests\Operator;

use MercurySolutions\MathML\Exception\ParameterCountException;
use MercurySolutions\MathML\Operator\OperatorMinus;

/**
 * Class OperatorMinusTest
 * @package MercurySolutions\MathML\Tests\Operator
 */
class OperatorMinusTest extends AbstractOperatorTest
{
    protected function setUp()
    {
        $this->createOperator(OperatorMinus::class);
    }

    public function testSimpleClosure()
    {
        $this->assertEquals(
            12,
            $this->operator->calculate([30,18])
        );
    }

    public function testMultipleParameters()
    {
        $this->assertEquals(10, $this->operator->calculate([50,25,15]));
    }

    public function testTooFewParameters()
    {
        $this->expectException(ParameterCountException::class);
        $this->operator->calculate([]);
    }
}
