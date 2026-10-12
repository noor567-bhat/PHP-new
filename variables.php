<?php
//this is jsodjsij
/*this is a single line */
//variables are declared using $ sign


// IN PHP WE DON't jave to specify data type explicitily


$name="noor";
$age="34";
//echo statement is used to print the contents on the screen

echo"my name is $name<br>";

echo"my age is $age<br>";
$salary=1000000;
echo" m salary is $salary<br>";


//data types
//var_dump is used to inspect a value and its type
//1.integer
echo "data types...<br>";
var_dump($age);//int


//2.string
echo "string...<br>";
var_dump($name);//string

//3.float
echo "float....<br>";
var_dump($salary);//float

//4.boolean
echo "boolean...<br>";
var_dump($salary);//boolean

//5.array
echo "array...<br>";
$arr=["bca", "bba","mca"];//STRING ARRAY
var_dump($arr);//array

//6.null
//NULL MEANS THAT A VARIALBE IS DECLEARED BUT NOT ASSIGNED ANY VALUE
$address=null;
echo"<br>null datatype:<br>";
echo "address contains";
var_dump($address);

//ASSIGNMENT
// PRINT YOUR PORTFOLIO INFORMATION USING ALL DATA TYPES ON SEPARATE LINES

//new file :portfolio.php





?>