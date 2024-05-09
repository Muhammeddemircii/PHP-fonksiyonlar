<?php
    function selamlama($isim, $mesaj="Günaydın"){
        return "$mesaj $isim";
    }
    echo selamlama("Ahmet");

    function kareAl($taban=3, $us=2){
        return $taban ** $us;
    }
    echo kareAl();
?>