<?php
    function topla($sayi1, $sayi2){
        return $sayi1 + $sayi2;
    }
    echo topla("20", "30"); //sayı tipine dönderebiliyorsa php döndürür.


    declare(strict_types=1);
    function topla(int $sayi1, int $sayi2, bool $isActive, array $sayilar): float{
        return $sayi1 + $sayi2 + 1.3;
    }
    echo topla(20, 30, true, [10,20]); 

?>