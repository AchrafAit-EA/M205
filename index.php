<?php
// declaration de  function  
    function addition(int $a ,int $b){
        return $a+$b;
    }
    function soustraire(int $a, int $b){
        return $a - $b;
    }
    function multiplier(int $a, int $b){
        return $a * $b;
    }
   function diviser(int $a, int $b){
        return $a / $b;
        if( $b = 0){
            throw new InvalidArgumentException("impossible de diviser sur Zero ");
        }
    }
?>
