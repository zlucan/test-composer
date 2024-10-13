<?php

namespace TestBuild\App;

class FirstClass
{
    public function __construct(int $a, int $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function getA()
    {
        return $this->a;
    }

    public function getB()
    {
        return $this->b;
    }

    public function sum()
    {
        return $this->a + $this->b;
    }
}