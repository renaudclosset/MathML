<?php

namespace MercurySolutions\MathML\Tests\Operator;

use MercurySolutions\MathML\Operator\OperatorMax;

/**
 * Class OperatorMaxTest
 * @package MercurySolutions\MathML\Tests\Operator
 */
class OperatorMaxTest extends AbstractOperatorTest
{

    protected function setUp()
    {
        $this->createOperator(OperatorMax::class);
    }

    public function testSimpleClosure()
    {
        $actual = $this->operator->calculate([12,24]);
        $this->assertEquals(24, $actual);
    }
}
