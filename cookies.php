<?php

$cookie_name = "user";
$cookie_value = "Karan Attri";

//setcookie($cookie_name, $cookie_value, time() + (86400), "/"); // 86400 = 1 day

setcookie($cookie_name, $cookie_value, time() + (3600), "/"); 
setcookie("user","", time() - (3600), "/");
echo "Cookie 'user' is deleted.<br>";
setcookie("user", "Karan Attri", time() + (3600), "/");
setcookie("email", "Karanattri022@gmail.com", time() + (3600), "/");

if(!isset($_COOKIE[$cookie_name])){
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else{
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}

?>