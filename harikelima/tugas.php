<?php

$tahun=2024;

if (($tahun % 4 == 0 && $tahun % 100 != 0)|| ($tahun % 400 == 0)){
    echo "Tahun $tahun adalah tahun kabisat";
}else{
    echo "Tahun $tahun bukan tahun kabisat";
}
