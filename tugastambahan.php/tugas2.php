<?php
if(isset($_GET['halaman'] )){
    switch($_GET['halaman']){
        case "hari1" :
            include "haripertama/index.php";
            break;
        case "hari2" :
            include "harikedua/index.php";
            break;
        case "hari3" :
            include "hariketiga/index.php";
            break;
        case "hari4" :
            include "harikeempat/index.php";
            break;
        case "hari5" :
            include "harikelima/index.php";
            break;
        case "hari6" :
            include "harikeenam/tugas.php";
            break;
        case "hari7" :
            include "hariketujuh/index.php";
            break;
        case "hari8" :
            include "harikedelapan/index.php";
            break;
        case "link1" :
            include "harikedelapan/link1.php";
            break;
        case "link2" :
            include "harikedelapan/link2.php";
            break;
        default:
        include "welcome.php";                                                                                                                                                                           
    }
}else{
    include "welcome.php";
}
      