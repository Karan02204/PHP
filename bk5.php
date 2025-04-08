<?php
$url= "https://www.google.com";
$url = filter_var($url,FILTER_SANITIZE_URL);
if(!filter_var($url,FILTER_VALIDATE_URL) === false){
    echo ("<h1>$url is a valid url</h1>");
} else{
    echo "<h1>$url is not a valid url</h1>";
}
?>