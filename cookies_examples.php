<?php

// Setting a cookie that expires in 1 hour
setcookie("user", "Dhruv", time() + 3600);
setcookie("bruh","cookie",time() + 3600);

// Accessing cookie data
if (isset($_COOKIE["user"])) {
    echo "Hello, " . $_COOKIE["user"]; // Outputs: Hello, Dhruv
}

?>