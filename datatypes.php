<?php
define("SITE_NAME" ,"Dhruv's Php site");
$string = "PHP is awesome"; // String
$integer = 100; // Integer
$float = 10.5; // Float
$boolean = true; // Boolean (true or false)
$array = array("Apple", "Banana", "Mango"); // Array
$nullValue = null; // Null (no value)

echo "String: $string <br>"; //br to break lines
echo "Integer: $integer <br>";
echo "Float: $float <br>";
echo "Boolean: $boolean <br>"; // Displays 1 for true, nothing for false
echo "Array: " . implode(", ", $array) . "<br>"; //implode takes a seperator as an ref and the array which is to be imploded
echo "Null: " . var_dump($nullValue)."<br>"; //Dumps information about a variable
echo "Welcome to " .SITE_NAME ."<br>";

?>