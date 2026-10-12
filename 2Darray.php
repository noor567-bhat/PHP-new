<?php
//2d arrays;arrays in arrays
$students =[
    [1,"newton","gravity"],
    [2,"tesla","electricity"],
    [3,"einstein","relativity"],
 ];
// echo $students[0][0]."<br>";
// echo $students[0][1]."<br>";
// echo $students[0][2]."<br>";

// echo $students[1][0]."<br>";
// echo $students[1][1]."<br>";
// echo $students[1][2]."<br>";

// echo $students[2][0]."<br>";
// echo $students[2][1]."<br>";
// echo $students[2][2]."<br>";

for($i=0;$i<count($students);$i++){ //no f rows
    for($j=0;$j<count($students[$i]);$j++){ //no of elementsin row 0,1,2
echo $students[$i][$j]."<br>";
    }
    echo "<br>";
}

//fpr each loop
// echo "<h3> using for each loop <h3>";
// foreach($students as $row){
//     foreach($row as $val){
//         echo"$val."<br>";

//     }
//     echo "<br>";
// }
//associative 2d array
$books=[
 ["name"=>"atomic habits",
 "price"=>200,
 "author"=>"james"
 ],
  ["name"=>"crime and punishment",
 "price"=>400,
 "author"=>"franz kafta"
 ],
  ["name"=>"kite runner",
 "price"=>500,
 "author"=>"khalid hussaini"
  ],
];
echo $books[0]["name"];       
echo $books[2]["author"];
for($i=0;$i<count($books);$i++){
    echo $books[$i]["name"]."<br>";
    echo $books[$i]["author"]."<br>";
    echo $books[$i]["price"]."<br>";
}
//for each on above one



?>