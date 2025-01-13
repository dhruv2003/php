<?php
$age = 21;
$is_pass = false;
$marks = 91;
$day = "Saturday";

switch($day){
  case "Monday":
    echo"it is monday today";
    break;
  case "Tuesday":
    echo"Tuesday today";
    break;
  default:
    echo "Error"; 
    break; // Added break statement for default case
}

echo "\n" . "<br>"; // Line break after switch case

if ($marks >= 90) {
  echo "\nGrade: A+". "<br>";
} elseif ($marks >= 80) {
  echo "\nGrade: A". "<br>";
} elseif ($marks >= 70) {
  echo "\nGrade: B". "<br>"; // Line break before Grade B
} else {
  echo "\nGrade: C" . "<br>";
}

// if($age && $is_pass){
//   echo"Pass";
// }else{
//   echo "Fail";
// }

?>