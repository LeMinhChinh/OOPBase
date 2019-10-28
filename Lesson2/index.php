<?php
namespace App\DemoNameSpace;

class Test
{
    protected $name = 'LMC';

    public function demo()
    {
        return $this->name . '---' . __CLASS__;
    }

    public function __construct($myAge)
    {
        echo "my age : {$myAge}";
        echo "</br>";
    }
}