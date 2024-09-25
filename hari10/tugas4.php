<?php

$tahun=2024;
  for ($tahun = 2024; $tahun <= 2200; $tahun++){
  if (($tahun % 4 == 0 && $tahun % 100 != 0)|| ($tahun % 400 == 0)){
      echo "Tahun $tahun adalah tahun kabisat<br>";
  }
  }