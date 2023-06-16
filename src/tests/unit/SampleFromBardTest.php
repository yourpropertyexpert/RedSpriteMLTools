<?php

namespace redspritedemo;

use PHPUnit\Framework\TestCase;

class SampleFromBardTest extends TestCase
{
    public function testGetResults()
    {
        $demo = new Demo([1, 2, 3]);
        $results = $demo->getResults();
        $this->assertSame([
            "inputvalues" => [1, 2, 3],
            "sum" => 6,
            "count" => 3,
            "average" => 2,
        ], $results);
    }

    public function testGetSum()
    {
        $demo = new Demo([1, 2, 3]);
        $this->assertSame(6, $demo->getSum());
    }

    public function testGetCount()
    {
        $demo = new Demo([1, 2, 3]);
        $this->assertSame(3, $demo->getCount());
    }

    public function testGetAverage()
    {
        $demo = new Demo([1, 2, 3]);
        $this->assertSame(2, $demo->getAverage());
    }
}