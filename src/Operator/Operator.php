<?php

namespace MercurySolutions\MathML\Operator;

use Closure;

/**
 * Class Operator
 * @package MercurySolutions\MathML\Operator
 */
abstract class Operator implements IOperator
{

    /**
     * @var Closure
     */
    private $cachedClosure;

    /**
     * @param array $parameters
     * @return float
     */
    public function calculate(array $parameters)
    {
        if (!isset($this->closure)) {
            $this->cachedClosure = $this->getClosure();
        }
        $closure = $this->cachedClosure;
        return $closure($parameters);
    }

    abstract protected function getClosure(): Closure;
}
