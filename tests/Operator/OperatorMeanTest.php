<?php

namespace Operator;

/**
 * Class OperatorMeanTest
 * @package Operator
 */
class OperatorMeanTest extends AbstractOperatorTest
{

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
}
