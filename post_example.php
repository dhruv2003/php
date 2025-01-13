<?php

// the $_POST array is used to collect form data sent via POST method (usually hidden in the HTTP request body).

//simple POST 


// Check if the form is submitted using the POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Access the form data using the $_POST superglobal array
    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
}

// Output the values
echo $name . ' ' . $age . ' ' . $email;

?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name: <input type="text" name="name"><br>
    Age: <input type="text" name="age"><br>
    Email: <input type="text" name="email"><br>
    <input type="submit">
</form>