<?php
//sum of even numbers
function add($arr){
    $sum=0;
    for($i=0;$i<count($arr);$i++){
        if($arr[$i]%2!=0){
            $sum=$sum+$arr[$i];

        }
    }
    return $sum;
    
}
$numbers=[1,3,4,5,6,7,9,11];
echo add($numbers);


?>