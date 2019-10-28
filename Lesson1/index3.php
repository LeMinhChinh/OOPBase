<?php
// Kế thừa - chống kế thừa - overide - chống overide
// final :chống kế thừa
class Person
{
    public $name = 'LMC';
    public $age = 20;

    private $money = 10000;
    protected $address = 'Nam Định';

    public function getName()
    {
        return $this->name;
    }
}

// Kế thừa lớp Person
class Student extends Person
{   
    public function getAddress(){
        return $this->address;
    }

    public function getName(){
        //override 
        return $this->age;
    }

    public function Test(){
        // return $this->getName();
        return parent::getName();
    }
}

$st = new Student;
$myName = $st->name;
echo $myName;
echo "</br>";
// $money = $st->money; //lỗi : private
// echo $money;
// $add = $st->address; //protected:chỉ sử dụng trong lớp
// echo $add;
$add = $st->getAddress();
echo $add;
echo "</br>";

$name = $st->getName();
echo $name;
echo "</br>";

$test = $st->Test();
echo $test;