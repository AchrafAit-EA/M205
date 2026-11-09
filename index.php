<?php
// declaration de  function  
    function addition(int $a ,int $b){
        return $a+$b;
    }
    $resultat = addition(2,10);
    echo 'le Resultat est : '.$resultat."<br>";

    function soustraire(int $a, int $b){
        return $a - $b;
    }
    $resultat = soustraire(10,5);
    echo "le resultat est : ".$resultat."<br>";
    function multiplier(int $a, int $b){
        return $a * $b;
    }
    $resultat = multiplier(4,5);
    echo "le resultat est : ".$resultat."<br>";
   function diviser(int $a, int $b){
        return $a / $b;
    }
    $resultat = diviser(10,5);
    echo "le resultat est : ".$resultat."<br>";
?>
