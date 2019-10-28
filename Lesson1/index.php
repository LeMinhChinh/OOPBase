<?php

// Đinh nghĩa class trong oop php
class Student{
    // Định nghĩa thuộc tính
    public $name = 'Lê Minh Chính';
    protected $age= 20;
    protected $money = 100000;
    private static $add = 'Nam Định';
    const PI = 3.14;
    public static $email = 'test@gmail.com';
    // Định nghĩa phương thức : Miêu tả hành động của đối tượng
    public function playingGame($game){
        //$this : con trỏ nội tại của class
        return $this->name . ' play ' . $game;
    }

    protected function tronTietBoGio(){
        return $this->money . 'tien phat';
    }

    function diTanGai(){
        return "Lên bờ hồ lúc " . self::PI ." giờ" ;
    }

    public function getEmail(){
        // $add = $this->getAddress();
        $add = self::getAddress();
        return Student::$email . '---' . $add;
        // return self::$email;
    }

    public static function getAddress(){
        $obj = new Student;
        // Trong phương thức static k hỗ trợ con trỏ this
        // $tronHoc = (new Student)->tronTietBoGio();
        $tronHoc = $obj->tronTietBoGio();
        return self::$add . '---' . $tronHoc;
    }

    public static function Demo(){
        return self::getAddress();
    }
}

// Định nghĩa object
$stCNTT = new Student;
$stKinhTe = new Student;

// cách truy cập vào 1 thuộc tính trong class
// $myAddress = $stCNTT->address; //Lỗi:vì sử dụng private
// echo $myAddress;

$myName = $stKinhTe->name;
echo $myName;
echo "</br>";
// $myAge = $stCNTT->age; //Lỗi:vì sử dụng protected
// echo $myAge;

// Truy cập vào phương thức của class
$play = $stCNTT->playingGame('AOE');
echo $play;

echo "</br>";

// $tronTiet = $stCNTT->tronTietBoGio();
// echo $tronTiet;

$gotoLake = $stCNTT->diTanGai();
echo $gotoLake;
echo "</br>";

// Truy cập thuộc tính static
$myEmail = Student::$email;
echo $myEmail;
echo "</br>";

$getEmaill = $stCNTT->getEmail();
echo $getEmaill;
echo "</br>";

$getAdd = Student::getAddress();
echo $getAdd;
echo "</br>";

$getDemo = Student::Demo();
echo $getDemo;