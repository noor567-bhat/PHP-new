<?php
$str="hello world";
//string functions 1
//1.strlen()
echo strlen($str);
echo"<br>";
//2.str word_count
echo str_word_count($str);
echo"<br>";
// 3.strrev
 echo strrev($str);
echo"<br>";
//  4. strtoupper

echo strtoupper($str);
 echo"<br>";

//  5. strtolower

echo strtolower($str);
echo"<br>";


// 6.strpos

echo strpos($str,"world");
echo"<br>";

// 7.substr

// extract  a part of string 
echo substr($str,0,5);
echo"<br>";
echo substr($str,6,10);
echo"<br>";

// 8.str_replace
echo str_replace("world","mam",$str);
echo"<br>";

// 9.explode
//splits a string into array
$mystring="simplicity is the best quality";
$arraystring =explode(" ",$mystring);
print_r($arraystring);


// 10.implode
//converts array into string
$arr=["jane","austin"];
$st=implode("-",$arr);

echo"<br>";
echo $st;
echo"<br>";

// 11..compare the strings -strcmp

echo strcmp("PHP","php");
echo"<br>";

echo strcmp("PHW","php");
echo"<br>";
echo strcmp("PHW","PHW");
echo "<br>";
// 12 str_repeat
echo str_repeat("naureen",10);
echo "<br>";

// 13. ucwords
echo "orginal string is :".$mystring;
echo "<br>";
echo"new string is: ".ucwords($mystring);

//home assignment:
//explore some of the built in array functions 
?>