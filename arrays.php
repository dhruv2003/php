<?php

//including the globals file so as to take values from one files
include "globals.php";



//normal arr inits
$arr = array("item1","item2","item3");

//access normal arrays
echo $arr[0]. "<br>";
echo $arr[1]."<br>";
echo $arr[2]."<br>";


//associative arr init 
//dicts in python
$array = array(
  "name" => "Dhruv",
  "age" => "21",
  "city" => "mumbai"
);


echo $array["name"]."<br>"; //associating the arrray index with the key itself 
echo $array["age"]."<br>";


//multidimensional arrays
$multi_arr = array(
  array("name" => "oracle" ,"posi"=> "SDE-1"),
  array("name" => "JPMC" ,"posi"=> "SDE-2")
);



//access multidimensional arr
echo $multi_arr[0]["name"]."<br>";
echo $multi_arr[1]["name"]."<br>";
echo $bruh."<br>";

?>
