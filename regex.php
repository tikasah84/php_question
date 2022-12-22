<?php

$text="abc@grepsr.com";
preg_match_all("([^@]+)", $text, $matches);
print_r($matches);

?>