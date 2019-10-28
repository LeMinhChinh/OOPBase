<?php

abstract class A
{
    // Bẫn được khai báo thuộc tính bình thường
    public $age = 20;
    private $money = 10000;
    protected $name = 'LMC';

    // Khai báo phương thức
    // 1 - Có từ khóa abstract thì phải là phương thức rỗng và chỉ chấp nhận protected or public
    abstract public function demo();
    abstract protected function test();

    // 2 - như các phương thức bt khác
    public function check()
    {
        return $this->money;
    }
}

// $a = new A; echo $a->age; //Không thể khởi tạo đối tượng

abstract class B extends A
{
    abstract public function example();
    // Định nghĩa các phương thức khác
}

class C extends B
{
    // Bắt buộc override lại các phương thức abstract
    public function demo()
    {

    }

    public function test()
    {
        // return "This is Test";
        return $this->name;
    }

    public function example()
    {

    }
}

$c = new C;
echo $c->test();