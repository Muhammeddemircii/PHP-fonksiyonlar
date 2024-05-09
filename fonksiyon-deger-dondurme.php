<?php
    function toplama(){
        return 20+50;
    }
    echo toplama();


    function sene(){
        return date("Y");
    }

    function saat(){
        return date("h");
    }

    function yasHesapla(){
        return sene()-2001;
    }
    $yas=yasHesapla();
    echo $yas;


    function selamlama(){
        if(saat()<12){
            return "Günaydın";
        }else{
            return "iyi Akşamlar";
        }
    }
    echo selamlama();
?>