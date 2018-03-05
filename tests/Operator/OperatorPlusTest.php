<?php

namespace Operator;

use MercurySolutions\MathML\MathML;
use PHPUnit\Framework\TestCase;

/**
 * Class OperatorPlusTest
 * @package Operator
 */
class OperatorPlusTest extends TestCase
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
