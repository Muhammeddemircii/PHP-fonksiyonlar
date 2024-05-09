<?php
    $x=5;
    echo $x;

    function test(){
        global $x;
        echo $x;
    }
    test();

    function test2(){
        $GLOBALS["x"]=10;

    }

    test2();
    echo $x;
?>