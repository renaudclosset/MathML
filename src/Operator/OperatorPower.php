<?php

namespace MercurySolutions\MathML\Operator;

use Closure;
use MercurySolutions\MathML\Exception\MathMLException;
use MercurySolutions\MathML\Exception\ParameterCountException;

/**
 * Class OperatorPower
 * @package MercurySolutions\MathML\Operator
 */
class OperatorPower extends Operator
{
    /**
     * @return Closure
     */
    protected function getClosure(): Closure
    {
        return function (array $parameters) {
            // validation
            if (count($parameters) !== 2) {
                throw new ParameterCountException($this, count($parameters), 2);
            }
            $p1 = array_shift($parameters);
            $p2 = array_shift($parameters);
            return pow($p1, $p2);
        };
    }
}
