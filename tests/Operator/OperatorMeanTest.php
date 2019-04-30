<?php

namespace MercurySolutions\MathML\Tests\Operator;

use MercurySolutions\MathML\Operator\OperatorMean;

/**
 * Class OperatorMeanTest
 * @package Operator
 */
class OperatorMeanTest extends AbstractOperatorTest
{

    protected function setUp()
    {
        $this->createOperator(OperatorMean::class);
    }

    /**
     * @throws \Exception
     */
    public function testSimpleMean()
    {
        $xml = '<math><apply><mean/><ci>a</ci><cn>2</cn><ci>b</ci></apply></math>';
        $parameters = array(
            'a' => 14,
            'b' => 32
        );
        $result = $this->executeCalculation($xml, $parameters);

        $this->assertEquals(16, $result);
    }

    public function testNullParameters()
    {
        $actual = $this->operator->calculate([null, 1, 5]);
        $this->assertEquals($actual, 3);

        $actual = $this->operator->calculate([]);
        $this->assertNull($actual);

        $actual = $this->operator->calculate([null, null]);
        $this->assertNull($actual);
    }
}
