<?php

namespace MercurySolutions\MathML\Tests\Operator;

use MercurySolutions\MathML\Operator\OperatorMin;

/**
 * Class OperatorMinTest
 * @package MercurySolutions\MathML\Tests\Operator
 */
class OperatorMinTest extends AbstractOperatorTest
{
    protected function setUp()
    {
        $this->createOperator(OperatorMin::class);
    }

    public function testSimpleClosure()
    {
        $actual = $this->operator->calculate([40,10]);
        $this->assertEquals(10, $actual);
    }
}
