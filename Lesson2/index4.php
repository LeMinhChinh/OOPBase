<?php
// interface

interface A
{
    // Không được phép định nghĩa thuộc tính : public $name = 'a';
    // Chỉ được khai báo phương thức bà là phương thức rỗng
    public function Test();
    // protected function demo();private function check(); //sai vì chỉ chấp nhận public
    public function demo();
}
// Không được khởi tạo đối tượng cho interface : $a =new A

interface B extends A
{
    // 2 interface kế thừa nhau vẫn sử dụng extends
    public function check();
}

class C implements B
{
    // class kế thừa 1 interface dùng implements
    // class C phải override toàn bộ phương thức của interface
    public function Test()
    {
        
    }

    public function demo()
    {
        
    }

    public function check()
    {
        return "Test";
    }
}

$c = new C;
echo $c->check();