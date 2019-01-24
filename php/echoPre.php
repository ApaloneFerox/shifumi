<?php
    function echoPre($val){
        echo "<pre>";
        if(gettype($val) === "array"){
            var_dump($val);
        }else{
            echo $val;
        }
        echo "</pre>";
    }
?>