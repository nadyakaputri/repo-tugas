<?php

 $tahun=2024;
  for ($tahun = 1900; $tahun <= 2100; $tahun++){
  if (($tahun % 4 == 0 && $tahun % 100 != 0)|| ($tahun % 400 == 0)){
      echo "Tahun $tahun adalah tahun kabisat<br>";
  }
  }
for ($i=5; $i>=1; $i--){
    echo "perulangan i ke-$i";
    for ($k=1; $k<=$i; $k++){
        echo "*";
    }
    echo "<br>";
}