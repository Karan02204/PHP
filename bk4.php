<?php
$email = "karanattri022@@gmail.com";
$email = filter_var($email,FILTER_SANITIZE_EMAIL);
if(!filter_var($email,FILTER_VALIDATE_EMAIL) === false){
    echo ("<h1>$email is a valid email address</h1>");
} else{
    echo "<h1>$email is not a valid email address</h1>";
}
?>