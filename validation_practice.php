<?php
$name=$email=$password="";
$nameErr=$emailErr=$passwordErr="";

if($_SERVER['REQUEST_METHOD']=="POST"){
    if(empty($_POST["name"])){
        $nameErr="Name is required";
    } else{
        $name = test_input($_POST["name"]);
        if(!preg_match("/^[a-zA-Z0-9' ]*$/",$name)){
            $nameErr = "Only letters , numbers and whitespaces are allowed";
        }
    }

    if(empty($_POST["email"])){
        $emailErr="Email is required";
    } else{
        $email = test_input($_POST["email"]);
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $emailErr = "Invalid Email Format";
        }
    }

    if(empty($_POST["password"])){
        $passwordErr = "Password is required";
    } elseif(strlen($_POST["password"])<8){
        $passwordErr = "Password must be of atleast 8 characters";
    }  
    else{
        $password = test_input($_POST["password"]);
    }
}

function test_input($data){
    return htmlspecialchars(stripslashes(trim($data)));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>>
        <label for="name">Name:</label>
        <input type="text" name="name" value="<?php echo $name; ?>" required>
        <span style="color:red;">*<?php echo $nameErr; ?></span>
        <br><br>
        <label for="email">Email:</label>
        <input type="email" name="email" value="<?php echo $email; ?>" required>
        <span style="color:red;">*<?php echo $emailErr; ?></span>
        <br><br>
        <label for="password">Password:</label>
        <input type="password" name="password" value="<?php echo $password; ?>" required>
        <span style="color:red;">*<?php echo $passwordErr; ?></span>
        <input type="submit" name="submit" value="Submit">  
    </form>
</body>
</html>