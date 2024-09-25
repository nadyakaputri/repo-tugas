<?php

//$a=1;

//if($a==1){
    //echo "satu<br>";
//}else{
    //echo "bukan satu<br>";
//}
//echo "stop";

//buatlah aplikasi untuk menentukan bilangan  genap dan bilangan ganjil
//ALGORITMA
//

// $bilangan=9;

// $hasil=$bilangan%2;

// if($hasil==0){
//     echo "bilangan genap";
// }else {
//     echo "bilangan ganjil";
// }

$totalBelanja=150000;
$diskon=0;

if($totalBelanja>200000){
    $diskon=0.1;
}elseif($totalBelanja>100000){
    $diskon=0.05;
}else{
    $diskon=0;
}

$potonganHarga=$totalBelanja*$diskon;
$totalBayar=$totalBelanja-$potonganHarga;

echo $totalBayar;
