<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Form</title>
</head>
<body>
  <h2>Contact Form</h2>

  <!-- Form to collect user input -->
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Name: <input type="text" name="name" required><br><br>
    Age: <input type="number" name="age" required><br><br>
    Email: <input type="email" name="email" required><br><br>
    <input type="submit" value="Click to Submit">
  </form>


  <!-- validation of forms -->
  <?php
  // Check if the form has been submitted
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect the form data using POST
    $name = $_POST["name"];
    $age = $_POST["age"];
    $email = $_POST["email"];

    // Print the submitted data
    echo "<h3>Form Data Submitted:</h3>";
    echo "Name: $name<br>";
    echo "Age: $age<br>";
    echo "Email: $email<br>";
  }

  ?>
</body>
</html>