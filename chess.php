<?php
//using loops to draw a chessboard
echo"<table border=2>";
for($row=1;$row<=10;$row++){
    echo"<tr>";
for($col=1;$col<=10;$col++){
    $sum=$row+$col;
    if($sum%2==0){
    echo"<td height='20px' width='20px' bgcolor='white'></td>";
    } else{
      echo"<td height='20px' width='20px' bgcolor='black'></td>";   
    }
}
echo"</tr>";
}
echo"</table>";


?>