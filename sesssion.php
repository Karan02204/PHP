<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
    $_SESSION["favcolor"] = "green";
    $_SESSION["favanimal"] = "cat";  
    $_SESSION["nickname"] = "Krishna";  
    $_SESSION["favbranch"] = "SCE";
    echo "Session variables are set.";
    ?>  
</body>
</html>