<?php

namespace Operator;

use MercurySolutions\MathML\MathML;
use PHPUnit\Framework\TestCase;

/**
 * Class OperatorMeanTest
 * @package Operator
 */
class OperatorMeanTest extends TestCase
{
    /**
     * @param $xml
     * @param $parameters
     * @return float
     * @throws \Exception
     */
    protected function executeCalculation($xml, $parameters)
    {
        $mathML = new MathML($xml);
        return $mathML->calculate($parameters);
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
}
