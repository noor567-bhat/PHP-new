<?php
function fact($number){
    $factorial=1;
    for($i=1;$i<=$number;$i++){
        $factorial=$factorial*$i;
        }
        echo"$factorial";
    }
$number=4;
fact($number);

?>