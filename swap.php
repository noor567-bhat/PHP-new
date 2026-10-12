<?php
    function swap(&$x,&$y){
$z=$y;
$y=$x;
$x=$z;
}
$x=1;
$y=2;
swap($x , $y);
echo $x."<br>";
echo $y;
?>