<?php 

function Convert($number, $precision) {
    return floor($number* pow(10, $precision)) / pow(10, $precision);
  }

$num = 3.7999999999;
$rounded = Convert($num, 1);
echo $rounded."With precision of 1 \n";  
$rounded = Convert($num, 2);
echo $rounded."With precision of 2 \n";
$rounded = Convert($num, 3); 
echo $rounded."With precision of 3 \n";

  
?>