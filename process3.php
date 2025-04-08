<?php 
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name = $_POST['name'];
    $password = $_POST['password'];
    echo "<h2>Form Data Submitted:</h2>";
    echo "Name: ".$name."<br>";
    echo "Password: ".$password."<br>";

}
else {
    echo "Invalid request!";
}
?>