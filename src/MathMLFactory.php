<?php

namespace MercurySolutions\MathML;

class MathMLFactory
{

    public function create($xml)
    {
        $mathML = new MathML($xml);
        return $mathML;
    }
}
