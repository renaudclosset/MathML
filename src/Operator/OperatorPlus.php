<?php

namespace MercurySolutions\MathML\Operator;

use Closure;

/**
 * Class OperatorPlus
 * @package MercurySolutions\MathML\Operator
 */
class OperatorPlus extends Operator
{

    /**
     * @return Closure
     */
    protected function getClosure(): Closure
    {
        return function (array $parameters) {
            return array_sum($parameters);
        };
    }
}
