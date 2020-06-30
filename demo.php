<?php
//Tach bien
//function math($a)
//{
//    if ($a % 2 == 0)
//    {
//        if ($a % 5 == 0) {
//            echo "Day la so chia het cho 2 va 5";
//        }
//    } else {
//        echo "Day khong phai la so chia het cho 2 va 5";
//    }
//}
// echo math(20) ."<br/>";
//echo math(3);

//Tach hang
//public  function isAuthorrized($a) {
//
//    if ($a >= 1) {
//        return $a ." lon hon". 1;
//    } else {
//        return $a ."nho hon". 1;
//    }
//}
//
//echo isAuthorrized(6);


//Tach phuong thuc
class Math {
    public $a;
    public $b;
    public $c;

    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function getSubtraction() {
        return $this->a - $this->b;
    }
    public function getSumation() {
        return $this->a + $this->b;
    }

    public function getMultiplication() {
        $num1 = $this->getSubtraction();
        $num2 = $this->getSumation();
        return $this->b * $this->c;
    }
}
$math = new Math(2,3,4);
echo $math->getMultiplication();

