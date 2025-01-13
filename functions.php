<?php


function greet_me($name){
  echo"Greetings $name Welcome";
}



function add_me($a,$b){
  $c = $a + $b;
  return $c;
}

greet_me("who u?");
echo "\n" . "<br>";
$return_val=add_me(3,4);
echo"$return_val";

?>