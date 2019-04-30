<?php

namespace MercurySolutions\MathML\Exception;

use MercurySolutions\MathML\Operator\IOperator;

/**
 * Class ParameterCountException
 * @package MercurySolutions\MathML\Exception
 */
class ParameterCountException extends MathMLException
{

    public function __construct(IOperator $operator, int $actualParameterCount, int $expectedParameterCount)
    {
        $message = vsprintf("Operator %s expects %d parameters, not %d.", [
            get_class($operator),
            $expectedParameterCount,
            $actualParameterCount
        ]);
        parent::__construct($message);
    }
}
