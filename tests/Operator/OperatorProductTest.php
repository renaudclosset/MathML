<?php

namespace MercurySolutions\MathML\Tests\Operator;

use MercurySolutions\MathML\Operator\OperatorProduct;

/**
 * Class OperatorProductTest
 * @package MercurySolutions\MathML\Tests\Operator
 */
class OperatorProductTest extends AbstractOperatorTest
{
    protected function setUp()
    {
        $this->createOperator(OperatorProduct::class);
    }

    public function testSimpleClosure()
    {
        $this->assertEquals(12, $this->operator->calculate([6,2]));
        $this->assertEquals(36, $this->operator->calculate([6,3,2]));
        $this->assertEquals(36, $this->operator->calculate([6,2,3]));
    }
}
