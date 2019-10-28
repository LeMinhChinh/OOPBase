<?php

// Các phương thức magic oop
class Cat
{
    //Construc method
    public function __construct(){
        // Phương thức tự động chạy đầu tiên khi khởi tạo object cho class
        // __FUNCTION__:hằng số lấy tên phương thức đang dùng
        echo "This is " . __FUNCTION__;
        echo "</br>";
    }
    // destruct method

    public function __destruct(){
        // Phương thức này sẽ chạy cuối cùng khi khởi tạo đối tượng cho class
        echo "</br>";
        echo "This is " . __FUNCTION__ . '---' . __CLASS__;
    }

    public function fisrtRun(){
        echo "This is " . __FUNCTION__;
        echo "</br>";
    }

    public function __call($request, $respone){
        echo "Bạn vừa truy cập vào phương thức k tồn tại trong class";
        echo "</br>";
        // Phương thức này sẽ auto run khi truy cập vào 1 phương thức không tồn tại trong class
        // Dành cho phương thức k phải là static
    }

    public static function __callStatic($req, $res){
        echo "Bạn vừa truy cập vào phương thức static k tồn tại trong class";
        echo "</br>";
    }

    public function __get($key){
        echo "Bạn vừa truy cập vào thuộc tính {$key} không tồn tại trong class";
        echo "</br>";
        // n sẽ auto run khi truy cập vào thuộc tính không tồn tại trong class
    }

    public function __set($key, $value){
        //sẽ auto run khi bạn truy cập vào gán giá trị cho 1 thuộc tính không tồn tại trong class
        echo "Bạn vừa truy cập vào thuộc tính {$key} và đã gán cho n giá trị {$value} nhưng không tồn tại trong class";
        echo "</br>";
    }
}

$cat = new Cat; //Phương thức __construct lập tức chạy
$cat->fisrtRun();
$cat->eat(); //Không tồn tại phương thức eat()
Cat::drink(); //Không tồn tại phương thức static drink()
$cat->food; //food là thuộc tính k tồn tại trong class
$cat->meat = "Dog";