<?php

/**
 * Demo class
 *
 * @copyright Mark Harrison ltd. 2023
 * Used for demo to Redsprite.
 * Feel free to reused for any reason
 */

namespace redspritedemo;

class Demo
{
    public function __construct(private array $numbers)
    {
    }

    public function getResults()
    {
        $return = [];
        $return["inputvalues"] = $this->numbers;
        $return["sum"] = $this->getSum();
        $return["count"] = $this->getCount();
        $return["average"] = $this->getAverage();
        return json_encode($return);
    }

    public function getSum()
    {
        $a = 0;
        foreach ($this->numbers as $thisone) {
            $a += $thisone;
        }
        return $a;
    }

    public function getCount()
    {
        return count($this->numbers);
    }

    public function getAverage()
    {
        return $this->getSum() / $this->getCount();
    }

}