<?php
$is_true = true;

//basic while loop
while ($is_true == true) {
  echo"is_true is true";
  break;
}

echo "\n" . "<br>";


//basic while loop
$j = 1;
while ($j <= 5) {
    echo "Iteration: $j<br>";
    $j++;
}

echo "\n" . "<br>";


//do while loop
$k = 1;
do {
    echo "Iteration: $k<br>";
    $k++;
} while ($k <= 5);

?>