<?php

namespace MercurySolutions\MathML\Operator;

use Closure;

/**
 * Class OperatorMax
 * @package MercurySolutions\MathML\Operator
 */
class OperatorMax extends Operator
{

    /**
     * @return Closure
     */
    protected function getClosure(): Closure
    {
        return function ($parameters) {
            return max($parameters);
        };
    }
}
