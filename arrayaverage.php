<?php
function average($arr){
    $sum=0;
    for($i=0;$i<count($arr);$i++){
        
        $sum=$sum+$arr[$i];

    }
  
 
return $sum/count($arr);
}
$numbers=[1,2,5,7,9,12];
echo average($numbers);

?>