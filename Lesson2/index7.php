<?php
namespace App\Controller;

require 'bootstrap.php';
use App\bootstrap;
new bootstrap;

use Controller\home;
use Model\Home_model;


class A
{
    public function Test()
    {

    }
}

$home = new home;
echo $home->index();
echo "</br>";
$model = new Home_model;
echo $model->index();
