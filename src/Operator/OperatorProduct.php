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
            // no parameters must return null
            if (empty($parameters)) {
                return null;
            }
            $result = 1;
            foreach ($parameters as $parameter) {
                if ($parameter === null) {
                    return null;
                }
                $result *= $parameter;
            }
            return $result;
        };
    }
}
