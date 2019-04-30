<?php

namespace MercurySolutions\MathML\Operator;

use Closure;

/**
 * Class OperatorProduct
 * @package MercurySolutions\MathML\Operator
 */
class OperatorProduct extends Operator
{
    /**
     * @return Closure
     */
    protected function getClosure(): Closure
    {
        return function (array $parameters) {
            $result = 1;
            foreach ($parameters as $parameter) {
                $result *= $parameter;
            }
            return $result;
        };
    }
}
