<?php
class PhepToanCongTruNhanChia
{
    public $a;
    public $b;
    public $thucHienPhepTinh;



     //Phuong thuc ham khoi tao __constructor
    public function __construct($a, $b, $e)
    {
        $this->a = $a;
        $this->b = $b;
        $this->thucHienPhepTinh = $e;
    }
  //Phuong thuc tra ve gia tri cua $a
    public function getA()
    {
        return "so cua A la:" . $this->a;
    }
      //Phuong thuc tra ve gia tri cua $b
    public function getB()
    {
        return "so cua b la:" . $this->b;
    }
    // phuong thuc tra ve gia tri cua $thucHienPhepTinh
    public function getThucHienPhepTinh()
    {
        return $this->a * $this->b;
    }
}
      //Khoi tao cac doi tuong
$a1 = new PhepToanCongTruNhanChia(3, 3);
$a2 = new PhepToanCongTruNhanChia(1,2);
$b1 = new PhepToanCongTruNhanChia(3, 4);

$c = $a1 * $b1;
echo "So thu nhat la:" . $a1->getA()."<br/>";
echo "So thu hai la: " . $b1->getB()."<br/>";
echo "So thu ba la:" .$a2->getB()."<br/>";
echo "So thu ba la: " .$a1->getThucHienPhepTinh()."<br/>";
echo $c;

//thuc hien cac phep tinh toan
//function soChiaHetChoMotSo($a, $b, $c,$d,$e) {
//        echo $a + $b ."<br/>";
//        echo $c + $d * $e."<br/>";
//        echo $a + $d + $c+$d;
//}
//soChiaHetChoMotSo(2,4,5,1,3);
//Tranh gay hieu nham
//$a = $i;
//$i = 2;
//$O = 7;
//if ($O == $i) {
//    $O1 = 9;
//    echo $a = $O1;
//} else {
//    echo $i = O1;
//}