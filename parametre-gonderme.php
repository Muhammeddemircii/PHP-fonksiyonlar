<?php 
    function selamlama($isim){
        return "Merhaba".$isim;
    }
    echo selamlama("Ahmet")."<br>";
    echo selamlama("Ayşe")."<br>";
    echo selamlama("Ali")."<br>";


    function toplama($sayi1, $sayi2){
        return $sayi1 + $sayi2;
    }
    echo toplama(50, 50);

    function yasHesapla($dogumYili){
        return date("Y")-$dogumYili;
    }
    echo yasHesapla(1985);
    echo yasHesapla(2001);

    function emekliligeKacYilKaldi($dogumYili, $isim){
        $yas=yasHesapla($dogumYili);

        $kalanSure=65- $yas;

        if($kalanSure> 0){
            return "$isim, emekliliğe $kalanSure yıl kaldı.";
        } else{
            return "$isim, zaten $kalanSure yıl önce emekli oldunuz";
        }
    }
    echo emekliligeKacYilKaldi(1950, "Ahmet");
    echo emekliligeKacYilKaldi(1990, "Mehmet");
?>