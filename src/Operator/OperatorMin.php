<?php

namespace MercurySolutions\MathML\Operator;

use Closure;

/**
 * Class OperatorMin
 * @package MercurySolutions\MathML\Operator
 */
class OperatorMin extends Operator
{

    /**
     * @return Closure
     */
    protected function getClosure(): Closure
    {
        return function (array $parameters) {
            return min($parameters);
        };
    }
}
