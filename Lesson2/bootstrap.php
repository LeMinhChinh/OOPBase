<?php
namespace App;
class bootstrap
{
    // Khái niệm lazy loading - tên file trùng tên class
    // sau này tự động nạp file và triệu gọi class

    public function __construct()
    {
        spl_autoload_register(array($this,'_autoload'));
    }
    private function _autoload($file)
    {
        // $file : tên file cần tự động nạp
        // $file sau này được lấy thông qua namespace và class ở chỗ khác
        // App\Controller\Home
        $file = str_replace('\\', '/', trim($file, '\\')) . '.php';
        require_once $file;
    }
}