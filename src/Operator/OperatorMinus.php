<?php

namespace MercurySolutions\MathML\Operator;

use Closure;
use MercurySolutions\MathML\Exception\MathMLException;
use MercurySolutions\MathML\Exception\ParameterCountException;

/**
 * Class OperatorMinus
 * @package MercurySolutions\MathML\Operator
 */
class OperatorMinus extends Operator
{

    /**
     * @return Closure
     */
    protected function getClosure(): Closure
    {
        return function (array $parameters) {
            if (count($parameters) < 2) {
                throw new ParameterCountException($this, count($parameters), 2);
            }
            $result = null;
            $first = array_shift($parameters);
            if ($first !== null) {
                $result = floatval($first);
            }
            foreach ($parameters as $parameter) {
                if ($parameter !== null) {
                    $result -= floatval($parameter);
                }
            }
            return $result;
        };
    }
}
