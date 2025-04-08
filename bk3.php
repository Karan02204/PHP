<?php 

$int=0.0;
if(!filter_var($int,FILTER_VALIDATE_INT)===false){
    echo("<h1>Int is valid</h1>");
} else{
    echo "Int is invalid";
}
?>