<?php

namespace MercurySolutions\MathML\Tests\Operator;

use MercurySolutions\MathML\MathML;
use MercurySolutions\MathML\Operator\Operator;
use PHPUnit\Framework\TestCase;

/**
 * Class AbstractOperatorTest
 * @package Operator
 */
abstract class AbstractOperatorTest extends TestCase
{

    /**
     * @var Operator
     */
    protected $operator;

    /**
     * @param string $operatorFQCN
     */
    protected function createOperator(string $operatorFQCN)
    {
        $this->operator = new $operatorFQCN();
    }

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
