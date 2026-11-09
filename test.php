<?php
    require_once("index.php");
    echo "10 + 2 = ".addition(10,2)."<br>" ;
    echo "10 - 2 = ".soustraire(10,2)."<br>" ;
    echo "4 * 5 = ".multiplier(4,5)."<br>" ;
    echo "10 / 2 = ".diviser(10,2)."<br>" ;
    // tester un code php
    try{
        echo"La division de 10/2 = ".diviser(10,2);
    }catch(InvalidArgumentException $e){
        echo $e->getMessage();
    }
?>