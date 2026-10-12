<?php
    //Arrays
    //in c arrays have same type of data
    $numbers=[1,4,5,3,5,6];
    // echo $numbers[0];
    for($i=0;$i<count($numbers);$i++){
        echo $numbers[$i]."<br>";
    }

    $colors=["red","black","blue","white"];
  for($i=0;$i<count($colors);$i++){
        echo $colors[$i]."<br>";
  }
  //in php arrays can have elements of diferent data types
  $students=[1,"newton","bca"];
    for($i=0;$i<count($students);$i++){
        echo $students[$i]."<br>";
       }
//foreachloop 
echo"using for each loops";
       foreach($numbers as $value){
        echo"<br>"."$value";
       }
       foreach($colors as $value){
        echo"<br>"."$value";
       }
       
 foreach($students as $value){
        echo"$value"."<br>";
 }
//sum of elements of arrays





    // associative arrays
    $dishes=[
        "name"=>"pizza",
        "price"=>600,
        "taste"=>"average"
    
    ];
foreach ($dishes as $key => $value) {
    echo "$key=>$value" . "<br>";
}
//another way to print
echo"<br>";
print_r($dishes);
echo"<br>";
//passing array to function
function fun($arr){
    $sum=0;
    for($i=0;$i<count($arr);$i++){
        $sum=$sum+$arr[$i];

    }
    return $sum;

}
echo fun($numbers);
?>