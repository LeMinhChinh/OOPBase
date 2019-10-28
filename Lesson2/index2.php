<?php

namespace TestNameSpace;

require 'index.php';

// file index2 và index đang có namespace nên cần sử dụng cú pháp đê truy cập

use App\DemoNameSpace\Test as MyTest;

class MyNameSpace extends MyTest
{
    public function __construct($age)
    {
        parent::__construct($age);
        // gọi đến __construct của lớp cha
    }

    public function getNameSpace()
    {
        return __NAMESPACE__;
        
    }
}

$test = new MyNameSpace(20);
// 20 là tham số thực truyền vào __contruct
echo $test->demo();
echo "</br>";
echo $test->getNameSpace();