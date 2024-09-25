<?php

$data=array(array("persegi panjang"=>"persegi 1","panjang"=>"56","lebar"=>"23","luas"=>""),
            array("persegi panjang"=>"persegi 2","panjang"=>"33","lebar"=>"21","luas"=>""),
            array("persegi panjang"=>"persegi 3","panjang"=>"65","lebar"=>"42","luas"=>""),
            array("persegi panjang"=>"persegi 4","panjang"=>"73","lebar"=>"29","luas"=>""));

            foreach($data as $dt){
                $luas=$dt["panjang"]*$dt ["lebar"];
                echo $dt["persegi panjang"].'--'.$dt["panjang"].'--'.$dt["lebar"].'--'.$dt["luas"]."<br>";
            }
            

echo "<hr>";
$data=array(array("persegi panjang"=>"persegi 1","panjang"=>"56","lebar"=>"23"),
            array("persegi panjang"=>"persegi 2","panjang"=>"33","lebar"=>"21"),
            array("persegi panjang"=>"persegi 3","panjang"=>"65","lebar"=>"42"),
            array("persegi panjang"=>"persegi 4","panjang"=>"73","lebar"=>"29"),
        );

            foreach ($data as $dt=>$persegipanjang){
                $data[$dt]["luas"]=$data[$dt]["panjang"]*$data[$dt]["lebar"];
            }
     $jsonData=json_encode($data,JSON_PRETTY_PRINT);
     echo "<pre>".$jsonData."</pre>";
