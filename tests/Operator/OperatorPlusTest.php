<?php

namespace MercurySolutions\MathML\Tests\Operator;

/**
 * Class OperatorPlusTest
 * @package Operator
 */
class OperatorPlusTest extends AbstractOperatorTest
{
    /**
     * @throws \Exception
     */
    public function testSimpleAddition()
    {
        $xml = '<math><apply><plus/><ci>a</ci><cn>2</cn><ci>b</ci></apply></math>';
        $parameters = array(
            'a' => 14,
            'b' => 32
        );
        $result = $this->executeCalculation($xml, $parameters);

        $this->assertEquals(48, $result);
    }
}
