<?php
// fopen is used to open the file mode = r means the file is in read mode
$file = fopen("example.txt","r");


//file is opened in write mode so can  modify the contents of the file 
$file = fopen("example.txt","w");
if ($file) {
  fwrite($file, "Hello, world! This is written to the file.\n");
  fclose($file); // Close the file
  echo "Data written successfully!";
} else {
  echo "Unable to open file!";
}

echo"<br>";
echo"<br>";
//You can append data to a file instead of overwriting it by using "a" mode.

$file = fopen("example.txt", "a"); // Open file in append mode

if ($file) {
    fwrite($file, "Appended text.\n");
    fclose($file); // Close the file
    echo "Data appended successfully!";
} else {
    echo "Unable to open file!";
}

echo"<br>";
echo"<br>";

//saving all content of example.txt in variable called content 
//this file_get_contents is used to read the whooole file in one go
$content = file_get_contents("example.txt");

if($content != false){
  echo $content;
}else{
  echo "Unable to read file<br>";
}

if( $file ) {
  // Read the file line by line
  while (($line = fgets($file)) !== false) {
    echo $line . "<br>";
  }
  fclose($file); // Close the file
}else{
  echo "Unable to open file<br>";
  echo"<br>";
}


?>