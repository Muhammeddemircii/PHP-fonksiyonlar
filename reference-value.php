<?php
    function toplama(&$sayi) {              //aynı adrese veri göndermek için ve operatörü kullanılır.
        $sayi+=10;
        echo $sayi;
    }
    $ornekSayi=5;
    toplama($ornekSayi);
    echo $ornekSayi;

    function yasHesapla(&$tarihler) {
        for ($i=0; $i<count($tarihler); $i++){
            $tarihler[$i] =2023 - ($tarihler[$i]);
        }
        return $tarihler;
    }
    $liste=array(1990, 1985, 2000);
    echo "<pre>";
    print_r(yasHesapla($liste));
    print_r($liste);
    echo "<pre>";
?>