<?php
$marks=60;
echo"<h1>";
switch($marks)
{
case $marks>=90:
    
    echo"Grade A";
    break;
    case $marks>=80&&$marks<=90:
    echo"grade b";
    break;
    case $marks>=70&&$marks<=80:
    echo"Grade C";
    break;
  
    default:
    echo"fail";
    break;
}





?>