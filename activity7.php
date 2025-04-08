<?php
session_start(); // Start session at the very top

function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$name = $email = $password = "";
$nameErr = $emailErr = $passwordErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = sanitize_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            $nameErr = "Only letters and white space allowed";
        }
    }
  
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = sanitize_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
    } else {
        $password = sanitize_input($_POST["password"]);
        if (strlen($password) < 6) {
            $passwordErr = "Password must be at least 6 characters";
        }
    }

    // If there are no errors, store the user in session
    if (empty($nameErr) && empty($emailErr) && empty($passwordErr)) {
        $_SESSION["user"] = [
            "name" => $name,
            "email" => $email,
            "password" => $password // Not recommended to store raw passwords!
        ];
    }
}

// Check if user is logged in
if (isset($_SESSION["user"])) {
    $name = $_SESSION["user"]["name"];
    $email = $_SESSION["user"]["email"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Name: <input type="text" name="name" value="<?php echo $name; ?>">
    <span class="error">* <?php echo $nameErr; ?></span>
    <br><br>
    Email: <input type="text" name="email" value="<?php echo $email; ?>">
    <span class="error">* <?php echo $emailErr; ?></span>
    <br><br>
    Password: <input type="password" name="password">
    <span class="error">* <?php echo $passwordErr; ?></span>
    <br><br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
if (isset($_SESSION["user"])) {
    echo "You are logged in as: " . $_SESSION["user"]["name"] . " (" . $_SESSION["user"]["email"] . ")";
}
?>
</body>
</html>