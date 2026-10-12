<?php
//type declation
function fun(int $i){
    echo"$i<br>";
}
fun(600);
function fun2(int $i):int{
    return ++$i;
}
 echo"value of i is".fun2(600)."<br>";

 //add
 function add2(int $x,int $y):int{
    return $x+$y;
 }
echo add2(5,9)."<br>";

//default arguments
function fun3($x=1){
    echo" $x"."<br>";
}
fun3(2);
fun3();//default argument

//area of a circle
const pi=3.14;
function area($r):float{
return pi*$r*$r ;

}
echo area(4)."<br>";
//
function demo($x,$y){
    echo"inside function <br>";
    echo"x=$x<br>";
    echo"y=$y<br>";
    

}
$x=1;
$y=2;
echo"outside function <br>";
echo"x=$x<br>";
echo"y=$y<br>";
demo($x,$y);
?>