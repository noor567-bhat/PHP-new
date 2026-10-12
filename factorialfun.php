<?php
function fact($number){
  
      if($number==1)
        return 1;
      $factorial=1;
    $factorial=$number*fact($number-1);
return $factorial;
}
$number=4;
 echo fact($number);

?>