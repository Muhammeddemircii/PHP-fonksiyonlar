<?php
    function intro() {
        echo $parametreSayisi= func_num_args();
        if($parametreSayisi==0){
            echo "parametre yok";
        } else {
            $parametreler=func_get_args();
            foreach($parametreler as $parametre){
                echo $parametre."<br>";
            }
        }
    }
    intro("Ali", "Yılmaz");

?>