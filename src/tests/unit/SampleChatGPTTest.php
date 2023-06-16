<?php
// File: DemoTest.php

use PHPUnit\Framework\TestCase;
use redspritedemo\Demo;

class SampleChatGPTTest extends TestCase
{
    public function testGetResults()
    {
        $demo = new Demo([2, 4, 6]);
        $expectedResult = '{"inputvalues":[2,4,6],"sum":12,"count":3,"average":4}';
        $this->assertEquals($expectedResult, $demo->getResults());
    }

    public function testGetSum()
    {
        $demo = new Demo([2, 4, 6]);
        $this->assertEquals(12, $demo->getSum());
    }

    public function testGetCount()
    {
        $demo = new Demo([2, 4, 6]);
        $this->assertEquals(3, $demo->getCount());
    }

    public function testGetAverage()
    {
        $demo = new Demo([2, 4, 6]);
        $this->assertEquals(4, $demo->getAverage());
    }
}
?>
