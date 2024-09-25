<?php
echo "function with argument :<br>";
function cetak($nama){
    echo "selamat datang ".$nama;
    echo "<br>";
}
    cetak("nadya");
    cetak("kaputri");

echo "<hr>";
echo "function dengan 2 argumen :<br>";

function ageCount($nama,$tahun){
    $umur=date("Y")-$tahun;
    echo "hai $nama umur kamu $umur tahun<br>";
}
    ageCount("Nadya",2009);
    ageCount("Kaputri",2001);

echo "<hr>";
echo "function with default argumen value :<br>";

function ageCountt($nama,$tahun=2000){
    $umur=date("Y")-$tahun;
    echo "Hai $nama, umur kamu $umur tahun<br>";
}
    ageCountt("Nadya",2009);
    ageCountt("Kaputri");

echo "<hr>";
echo "functions-returning values :<br>";

function jumlahkan($bil1,$bil2){
    return $bil1+$bil2;
}
    echo jumlahkan(5,2)."<br>";
    echo jumlahkan(7,9)."<br>";
    $jum=jumlahkan(6,4);
    echo $jum;