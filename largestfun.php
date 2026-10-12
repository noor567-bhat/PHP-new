<?php
function largest($x,$y,$z){

if($x>$y){
    if($x>$z){
        echo"$x is greatest";
    }else"$z is greatest";
}elseif($y>$z){
    echo"$y is greatest";
}
else{
    echo"$z is greatest";
}
}
$x=12;
$y=23;
$z=55;
largest($x,$y,$z);


?>