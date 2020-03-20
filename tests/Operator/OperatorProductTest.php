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

    public function testMultiplyByNullMustBeNull()
    {
        $this->assertNull($this->operator->calculate([100, null]));
        $this->assertNull($this->operator->calculate([null, 34]));
        $this->assertNull($this->operator->calculate([45, null, 34]));
        $this->assertNull($this->operator->calculate([null]));
    }

    public function testNoParametersMustBeNull()
    {
        $this->assertNull($this->operator->calculate([]));
    }
}
