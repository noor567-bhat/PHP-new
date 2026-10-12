<?php

echo"<h1>";
echo"<table border=2>";
for($row=1;$row<=10;$row++){
    echo"<tr>";
for($col=1;$col<=10;$col++){
    $product=$row*$col;
    echo"<td>$product</td>";
}
echo"</tr>";
}
echo"</table>";
?>
//