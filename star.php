<?php
$sign='*';
for($row=1;$row<6;$row++){
    echo"<br>";
    for($col=1;$col<=$row;$col++){
           echo"$sign";
    }
  echo"<br>";
}

for($i=5;$i>1;$i--){
    echo"<br>";
    for($j=1;$j<$i;$j++){
           echo"$sign";
    }
  echo"<br>";
}


?>