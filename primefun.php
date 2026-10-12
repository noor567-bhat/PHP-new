<?php
function prime($number){
    for($i=2;$i<$number;$i++){
        if($number%$i==0){
            echo"$number is not prime";
            return;
        }
        
        
    }
    echo"$number is prime";
    }
$number=9;
prime($number);

?>