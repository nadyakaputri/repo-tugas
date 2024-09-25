<?php

$jumlahJamKerja=60;
$jamLembur=12;

if ($jamLembur>-24){
    $upah = (3000*12)+(2000*60);
}else{
    $upah =2000*60;
}
echo $upah;