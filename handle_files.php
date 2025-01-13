<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["file"])) {
    $file_name = $_FILES["file"]["name"];
    echo "Uploaded file: " . $file_name;
}
?>

<form method="post" enctype="multipart/form-data">
    Select file: <input type="file" name="file"><br>
    <input type="submit">
</form>