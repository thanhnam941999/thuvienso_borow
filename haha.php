<?php
echo 'Chao mung den voi web cua nam <br>'; 
//hoc lai ghi chu
echo'Bien cua php co phan biet chu hoa va chu thuong<br>';

$a = 'day la bien a<br><br>';
echo $a; /* xuat ra man hinh */
// khai bao 1 hang
define ('user','Nguyen Thanh Nam');
echo 'hien thi bien hang user:   '.user.'<br><br><br><br>';

// kieu du lieu
echo 'Co 7 kieu du lieu trong php:<br>
    1. So nguyen: int<br>
    2. So thuc: float, double<br>
    3. Mang: array<br>
    4. Null<br>
    5. Chuoi<br>
    6. object<br>
    7. Boolean<br><br><br>';
$thap_phan = 123;
$so_an=-123;
$tuoi = '12';

//tiep theo la ep kieu du lieu
$tuoi = (int)$tuoi;
echo 'bien tuoi:  '.$tuoi.'<br><br>';
var_dump($tuoi);
//neu ep kieu xong xuat ra thi sao
$b = 'abc123';
$c = '123abc';
$c = (int)$c;
$b = (int)$b;
echo '<br>'.$b.'<br>';
//luc nay no xuat ra man hinh gia tri 0
echo $c.'<br>';
// luc nay xuat ra 123 vi no nhan bien c la 123 truoc
//kiem tra xem bien c co phai kieu int ko
echo is_integer($c);
echo '<br><br><br>';

//khai bao 1 mang
//cach 1
$banthan = array('Nam','Manh','TuanAnh');
//cach 2
$banthan2 = array(
    0 => 'Nguyen Thanh Nam',
    1 => "Manh",
    2 => "Tuan Anh"
);
//cach 3
$banthan3 = array();
    $banthan3[0] = "Nam";
    $banthan3[1] = "Manh";
print_r($banthan);
echo '<br>'.$banthan;
echo '<br>'.$banthan[0];
// mang 2 chieu thi them $banthan[cot][hang]

// Tiep theo hoc ve cac toan tu
echo '<br>Cac loai toan tu<br>
><br>
<<br>
<=,>=<br>
==  : bang<br>
!=  : Ko bang<br><br><br><br>


';
// hoc ve cau lenh if else
echo "if else co the dung 3 loai:<br>
    1. Moi if(){};<br>
    2. If va if else, if else, else;<br>
    3. if long nhau<br><br><br>";

//hoc ve cau lenh switch case
echo 'Co 2 loai switch trong php<br>
1. Switch va if<br>
2. Switch long nhau<br> <br> <br>';

require_once "form1.html";
require "form1.html";
include "form1.html";
include_once "form1.html";

?>
