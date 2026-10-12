<?php
//sum of even numbers
function add($arr){
    $sumeven=0;
    $sumodd=0;
    for($i=0;$i<count($arr);$i++){
        if($arr[$i]%2==0){
            $sumeven=$sumeven+$arr[$i];

        }else{
            $sumodd=$sumodd+$arr[$i];

        }
    }
    return $sumeven."<br>".$sumodd;
    
}
$numbers=[1,3,4,5,6,7,9,11];
echo add($numbers);

?>