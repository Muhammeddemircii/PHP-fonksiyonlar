<?php
    function ortalama($not1, $not2){
        return ($not1 + $not2) / 2;
    }
    echo ortalama(50,70)."<br>";

    function ay_yaz($sayi){
        $sayilar = array("Ocak","Şubat","Mart","Nisan","Mayıs","Haziran","Temmuz","Ağustos","Eylül","Ekim","Kasım","Aralık");
        return $sayilar[$sayi-1];
    }
    $ay= ay_yaz(3);
    echo $ay."<br>";
?>