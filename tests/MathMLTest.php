<?php

namespace MercurySolutions\MathML\Tests;

use MercurySolutions\MathML\MathML;
use PHPUnit\Framework\TestCase;

/**
 * Class MathMLTest
 */
class MathMLTest extends TestCase
{

    /**
     * @throws DOMException
     * @throws Exception
     */
    public function testEmbeddedApplies()
    {
        $xml = '<math>
                    <apply>
                        <plus/>
                        <ci>a</ci>
                        <cn>6</cn>
                        <apply>
                            <power />
                            <ci>b</ci>
                            <cn>2</cn>
                        </apply>
                    </apply>
                </math>';

        $parameters = array(
            'a' => 5,
            'b' => 7
        );

        $mathML = new MathML($xml);
        $result = $mathML->calculate($parameters);

        $this->assertEquals(60, $result);
    }

    /**
     * @throws DOMException
     * @throws Exception
     */
    public function testElementOrderIsKeptForContentIdentifiers()
    {
        $xml = '<math><apply><power /><cn>5</cn><ci>two</ci></apply></math>';
        $params = array('two' => 2);
        $mathML = new MathML($xml);
        $result1 = $mathML->calculate($params);
        $this->assertEquals(25, $result1);

        $xml = '<math><apply><power /><ci>five</ci><cn>2</cn></apply></math>';
        $params = array('five' => 5);
        $mathML = new MathML($xml);
        $result2 = $mathML->calculate($params);
        $this->assertEquals(25, $result2);
    }
}
