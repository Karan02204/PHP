<?php
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];
    if($username == "admin" && $password == "admin"){
        $_SESSION["user"] = $username;
        header("Location: dashboard.php");
        exit;
    } else{
        echo "Invalid username or password";
    }
}
?>

<form method="post">
    Username: <input type="text" name="username"><br>
    Password: <input type="password" name="password"><br>
    <button type="submit">Login</button>
</form>