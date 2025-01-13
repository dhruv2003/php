<?php

session_start();

$_SESSION["user"] = "Dhruv";


//accessing session data 
echo "User: " . $_SESSION["user"] ."<br>";
session_abort();


?>