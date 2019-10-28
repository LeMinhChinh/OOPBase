<?php

trait A
{
    public function Test()
    {
        return "A";
    }

    protected function demo()
    {
        return "B";
    }
}

trait D
{
    public function example()
    {
        return "C";
    }
}

class B
{
    public function check()
    {
        return "C";
    }
}

class C extends B
{
    use A, D;
}

$c = new C;
echo $c->Test();