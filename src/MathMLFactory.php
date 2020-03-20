<?php

namespace MercurySolutions\MathML;

class MathMLFactory
{
    /**
     * @param $xml
     * @return MathML
     */
    public function create($xml): MathML
    {
        return new MathML($xml);
    }
}
