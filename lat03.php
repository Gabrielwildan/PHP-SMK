<?php

    function study(){
        echo "im learning about PHP";
    }

    function luaspersegi($p = 5, $l = 3){
        $luas = $p * $l;

        echo $luas;
    }

    function luas($p = 5, $l = 3){
        $luas = $p * $l;

        return $luas;
    }

    echo luas() *5 ;

    echo "<br>";

   function output(){
    echo "function learning";
   }
    
   echo '<h1>'.output().'</h1>';


?>