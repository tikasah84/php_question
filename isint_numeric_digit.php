<?php

$str = readline('Enter a string: ');

echo "you have entered: $str \n";

echo is_int($str) ? "$str is an integer \n" : "$str is not an integer \n";;      
echo is_integer($str) ? "$str is an integer \n" : "$str is not an integer \n";  
echo is_numeric($str) ? "$str is a number \n" : "$str is not a number \n \n \n"; 


$num = (int)readline('Enter a Number: ');

echo "you have entered: $num \n";

echo is_int($num) ? "$num is an integer \n" : "$num is not an integer \n";;      
echo is_integer($num) ? "$num is an integer \n" : "$num is not an integer \n";  
echo is_numeric($num) ? "$num is a number \n" : "$num is not a number \n";

?>