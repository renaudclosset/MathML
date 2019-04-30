<?php

namespace MercurySolutions\MathML\Tests\Operator;

use MercurySolutions\MathML\Exception\DivisionByZeroException;
use MercurySolutions\MathML\Operator\OperatorSDev;

/**
 * Class OperatorSDevTest
 * @package MercurySolutions\MathML\Tests\Operator
 */
class OperatorSDevTest extends AbstractOperatorTest
{
    protected function setUp()
    {
        $this->createOperator(OperatorSDev::class);
    }

    public function testSimpleClosure()
    {
        $this->assertEquals(10, $this->operator->calculate([10,20,30]));
        $this->assertEquals(7.0710678118655, $this->operator->calculate([10,20]));
    }

    public function testDivisionByZero()
    {
        $this->expectException(DivisionByZeroException::class);
        $this->assertEquals(7.0710678118655, $this->operator->calculate([10]));
    }
}
