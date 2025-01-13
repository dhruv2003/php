<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Upload Docs</title>
</head>
<body>
<h2>Upload File</h2>
    <form method="post" action="" enctype="multipart/form-data"> <!-- Ensure action is empty -->
        Select file: <input type="file" name="fileToUpload"><br><br>
        <input type="submit" value="Upload">
    </form>
</body>
</html>

<?php
// Check if the form is submitted and the file is uploaded
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["fileToUpload"])) {
    $target_dir = "/Users/dhruv/Documents/Dev/intern/uploads/"; // Directory where the file will be stored
    // Create the uploads directory if it doesn't exist
    if (!file_exists($target_dir)) {
        if (!mkdir($target_dir, 0777, true)) {
            die("Failed to create directories...");
        }
    }
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if the file is an image (optional check)
    if (isset($_FILES["fileToUpload"]["tmp_name"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".<br>";
            $uploadOk = 1;
        } else {
            echo "File is not an image.<br>";
            $uploadOk = 1; // Allow non-image files like PDFs
        }
    }

    // Check if the file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.<br>";
        $uploadOk = 0;
    }

    // Check file size (limit to 5MB)
    if ($_FILES["fileToUpload"]["size"] > 5000000) {
        echo "Sorry, your file is too large.<br>";
        $uploadOk = 0;
    }

    // Allow certain file formats (e.g., JPEG, PNG, GIF, PDF)
    if ($fileType != "jpg" && $fileType != "pdf" && $fileType != "png" && $fileType != "jpeg" && $fileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG, GIF & PDF files are allowed.<br>";
        $uploadOk = 0;
    }

    // If everything is okay, try to upload the file
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
            error_log("Error uploading file: " . $_FILES["fileToUpload"]["error"]); // Log the error
        }
    }
} else {
    echo "No file selected or invalid request.";
}
?>