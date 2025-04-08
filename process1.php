<?php 
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = htmlspecialchars($_POST['name']);
    //$email = htmlspecialchars($_GET['email']);
    $pass = htmlspecialchars($_POST['pass']);

    echo "<h2>Form Data Submitted:</h2>";
    echo "Name: ". $name . "<br>";
    //echo "Email: ". $email . "<br>";
    echo "Password: ". $pass . "<br>";
} else{
    echo "Invalid request!";
}
?>