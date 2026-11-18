<?php
// // 1
// $a=10;
// $b=2;
// echo"Tong: ".($a+$b)."<br>";
// echo"Hieu: ".($a-$b)."<br>";
// echo"Tich: ".($a*$b)."<br>";
// echo"Thuong: ".($a/$b)."<br>";


// // 2
// $c=9;
// $d="9";
// echo"So sanh c==d ";
// var_dump($c==$d);
// echo"<br>";
// echo"So sanh c===d ";
// var_dump($c===$d);
// echo"<br>";
// echo"So sanh c!=d ";
// var_dump($c!=$d);
// echo"<br>";
// echo"So sanh c<>d ";
// var_dump($c<>$d);
// echo"<br>";
// echo"So sanh c!==d ";
// var_dump($c!==$d);
// echo"<br>";


// // 3
// $e=9;
// // Tang truoc 
// echo ++$e."<br>";
// // Gia tri ++ roi moi duoc in ra
// // Tang sau
// echo $e++."<br>";
// // Gia tri in ra roi moi ++


// // 4
// $f="Xin ";
// $g="Chao";
// $h=$f.$g;
// $i=$f.=$g;
// echo"Chuoi sau khi noi bang . : $h<br>";
// //noi bang . khong la thay doi gia tri ban dau cua bien $f va $g
// echo"Chuoi sau khi noi bang .= : $i";
// //noi bang .= lam thay doi gia tri ban dau cua bien $f va $g


// // 5
// $chuoikhongdau="Tran Thanh Hoai";
// $chuoicodau="Trần Thanh Hoài";
// echo"So luong ky tu co trong chuoi la: ".(strlen($chuoikhongdau))."<br>";
// //strlen() dem theo bit, ki tu co dau se la 2 bit
// echo"So luong ky tu co trong chuoi la: ".(mb_strlen($chuoicodau))."<br>";
// //mb_strlen() se bo qua ky tu co dau


//6
$chuoivanban="Tran Thanh Hoai hoc lap trinh web";
echo"Chuyen chuoi thanh in hoa: ".strtoupper($chuoivanban)."<br>";
echo"Chuyen chuoi thanh chu thuong: ".strtolower($chuoivanban)."<br>";
$chuoivanbancodau="Trần Thanh Hoài học lập trình web";
echo"Chuyen chuoi thanh in hoa: ".mb_strtoupper($chuoivanbancodau)."<br>";
echo"Chuyen chuoi thanh chu thuong: ".mb_strtolower($chuoivanbancodau)."<br>";

?>