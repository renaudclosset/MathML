<?php

namespace Operator;

use MercurySolutions\MathML\MathML;
use PHPUnit\Framework\TestCase;

/**
 * Class AbstractOperatorTest
 * @package Operator
 */
abstract class AbstractOperatorTest extends TestCase
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

}
