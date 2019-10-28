<?php

namespace App\Server;

class TotalNumber
{
    private $a;
    private $b;

    public function __construct($n1 = 0, $n2 = 0)
    {
        $this->a = $n1;
        $this->b = $n2;
   }

   private function sum($number1, $number2)
   {
        return $number1 + $number2;
   }

   public function show()
   {
    //    $total = $this->sum($this->a, $this->b);
    //    return $total;
    
        if(isset($_POST['btnTotal'])){
            $a = $_POST['number1'] ?? '';
            $a = is_numeric($a) ? $a : 0;

            $b = $_POST['number2'] ?? '';
            $b = is_numeric($b) ? $b : 0;

            $total = $this->sum($a, $b);
            // return $total;

            header("Location:../index3.php?res={$total}");
        }
   }
}
$total = new TotalNumber;
$result = $total->show();
// echo $result;
// if(isset($_POST['btnTotal'])){
//     $a = $_POST['number1'] ?? '';
//     $a = is_numeric($a) ? $a : 0;

//     $b = $_POST['number2'] ?? '';
//     $b = is_numeric($b) ? $b : 0;

//     $total = new TotalNumber($a, $b);
//     $result = $total->show();
//     echo $result;
// }