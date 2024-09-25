<?php
// $totalBelanja = 280000;
// $diskon=0;

// if ($totalBelanja < 500000) {
//     $diskon = 0.10;
// } elseif ($totalBelanja < 250000) {
//     $diskon = 0.05;
// } elseif ($totalBelanja < 100000) {
//     $diskon = 0;
// } elseif {
//     $diskon = 0.15;
// }

// $totalBayar = $totalBelanja - ($totalBelanja * $diskon);

// echo $totalBayar;

// $nilai= 85;

// if ($nilai >= 90) {
//     $predikat = 'A';
// } elseif ($nilai >= 80) {
//     $predikat = 'B';
// } elseif ($nilai >= 70) {
//     $predikat = 'C';
// } elseif ($nilai >= 60) {
//     $predikat = 'D';
// } else {
//     $predikat = 'E';
// }

// echo "predikat untuk nilai $nilai adalah: $predikat";
// 


$berat = 50;
$tinggi = 155;

$imt = $berat / ($tinggi * $tinggi);

if ($imt < 18.5) {
    $kategori = 'Kurus';
} elseif ($imt >= 18.5 && $imt < 25) {
    $kategori = 'Normal';
} elseif ($imt >= 25 && $imt < 30) {
    $kategori = 'Overweight';
} else {
    $kategori = 'Obesitas';
}

echo "Kategori berat badan: " . $kategori . "\n";
?>




