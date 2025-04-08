<?php

setcookie("user", "Karan Attri", time() + (300), "/");
setcookie("email", "karanattri022@gmail.com", time() + (300), "/");

echo "Multiple cookies have been set!<br>d";

if(isset($_COOKIE["user"]) && isset($_COOKIE["email"])){
    echo "User: " . $_COOKIE["user"] . "<br>";
    echo "Email: " . $_COOKIE["email"] . "<br>";
} else{
    echo "Cookies not set!";
}

echo "<pre>";
print_r($_COOKIE);
echo "</pre>";
setcookie("Student", "LPU" , time() + (300), "/" , "" , true ,true);

?>