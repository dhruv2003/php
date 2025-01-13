<?php


// if the link is http://localhost/get_example.php?name=Dhruv&age=21 should return Dhruv and 21


// The $_GET array is used to collect form data sent via the URL (query string). This is commonly used in GET forms.
echo "Name: " .$_GET['name'] ."<br>";
echo "Age: " .$_GET['age'] ."<br>";
?>