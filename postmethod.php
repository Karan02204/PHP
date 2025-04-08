<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Simple PHP Form</h1>
    <form action="process1.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" name="name" required>
        <br><br>
        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <br><br>
        <label for="pass">Password:</label>
        <input type="password" name="pass" required>
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>