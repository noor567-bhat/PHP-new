<?php
$num=3;
$num2=6;
$result;
$operator='*';                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      
switch($operator){
  case'+':
  $result=$num+$num2;
  echo"$result";
    break;
  case'-':
  $result=$num-$num2;
   echo"$result";
    break;

  case'/':
  $result=$num/$num2;
   echo"$result";
    break;
  case'%':
  $result=$num%$num2;
   echo"$result";
    break;
      case'*':
  $result=$num*$num2;
   echo"$result";
    break;
default:
echo"invalid";
}




?>