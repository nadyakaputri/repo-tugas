<?php
echo "index array :<br>";
$nama=array("Andi","Budi","Candra","Dedi","Emon");
    echo $nama[4];

    echo "<hr>";
echo "menampilkan semua data pada array :<br>";

$nama=array("Andi","Budi","Candra","Dedi","Emon");
foreach ($nama as $n){
    echo $n.'<br>';
}

echo "<hr>";
echo "merubah data : <br>";

$nama=array("Andi","Budi","Candra","Dedi","Emon");
$nama[4]="Zulfa";//merubah data array pada elemen ke-4
foreach ($nama as $n){
    echo $n.'<br>';
}

echo "<hr>";
echo "menambah data array :<br>";

$nama=array("Andi","Budi","Candra","Dedi","Emon");
$nama[]="Maimunah";
foreach ($nama as $n){
echo $n.'<br>';
}

echo "<hr>";
echo "menghapus data array :<br>";

$nama=array("Andi","Budi","Candra","Dedi","Emon");
unset($nama[4]);//menghapus data array
foreach ($nama as $n){
    echo $n.'<br>';
}

echo "<hr>";
echo "Associative array : <br>";

$data=array("nama"=>"Andi",
            "nisn"=>"98765665845",
            "kelas"=>"XI RPL 1");

   foreach($data as $dt){
    echo $dt.'<br>';
   }

   echo "<hr>";
   echo "update data : <br>";

$data=array("nama"=>"Andi",
            "nisn"=>"98765665845",
            "kelas"=>"XI RPL 1");
            $data["nama"]="Budi";//merubah data

   foreach($data as $dt){
    echo $dt.'<br>';
   }

   echo "<hr>";
   echo "menambah data : <br>";

   $data=array("nama"=>"Andi",
               "nisn"=>"98765665845",
               "kelas"=>"XI RPL 1");
               $data["jenis kelamin"]="laki-laki";//menambah data
   
      foreach($data as $dt){
       echo $dt.'<br>';
      }

      echo "<hr>";
      echo "menghapus data : <br>";

$data=array("nama"=>"Andi",
            "nisn"=>"98765665845",
            "kelas"=>"XI RPL 1");
    unset ($data["nisn"]);//menghapus data nisn
   foreach($data as $dt){
    echo $dt.'<br>';
   }
echo "<hr>";
   echo "array multidimensi :<br>";
   $data=array(array("nama"=>"Andi","nisn"=>"98765665845","kelas"=>"XI RPL 1"),
               array("nama"=>"Budi","nisn"=>"98723465812","kelas"=>"XI RPL 1"),
               array("nama"=>"Candra","nisn"=>"98125665437","kelas"=>"X1 RPL 2"),
               array("nama"=>"dedi","nisn"=>"99346567563","kelas"=>"XI RPL 2"));
        foreach ($data as $dt){
            echo $dt["nama"].'--'.$dt["nisn"].'--'.$dt["kelas"].'<br>';
        }
    
    echo "<hr>";
   echo "array multidimensi :<br>";
   $data=array(array("nama"=>"Andi","nisn"=>"98765665845","kelas"=>"XI RPL 1"),
               array("nama"=>"Budi","nisn"=>"98723465812","kelas"=>"XI RPL 1"),
               array("nama"=>"Candra","nisn"=>"98125665437","kelas"=>"X1 RPL 2"),
               array("nama"=>"dedi","nisn"=>"99346567563","kelas"=>"XI RPL 2"));
        $jsonData=json_encode($data,JSON_PRETTY_PRINT);
        echo "<pre>".$jsonData."</pre>";
           

   
   
