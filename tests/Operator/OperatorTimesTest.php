<?php

namespace MercurySolutions\MathML\Tests\Operator;

use MercurySolutions\MathML\Operator\OperatorProduct;
use MercurySolutions\MathML\Operator\OperatorTimes;
use PHPUnit\Framework\TestCase;

/**
 * Class OperatorTimesTest
 * @package MercurySolutions\MathML\Tests\Operator
 */
class OperatorTimesTest extends TestCase
{
    public function testOveride()
    {
        $operator = new OperatorTimes();
        $this->assertInstanceOf(OperatorProduct::class, $operator);
    }
}
