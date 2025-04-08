<?php
$result = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];

    if (is_numeric($num1) && is_numeric($num2)) {
        switch ($operator) {
            case "+":
                $result = $num1 + $num2;
                break;
            case "-":
                $result = $num1 - $num2;
                break;
            case "*":
                $result = $num1 * $num2;
                break;
            case "/":
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = "Division by zero error!";
                }
                break;
            case "%":
                if ($num2 != 0) {
                    $result = $num1 % $num2;
                } else {
                    $result = "Division by zero error!";
                }
                break;
            case "^":
                $result = pow($num1, $num2);
                break;
            default:
                $result = "Invalid operator!";
                break;
        }
    } else {
        $result = "Please enter valid numbers!";
    }
}
?>
<form method="post" action="">
    <input type="text" name="num1" required>
    <select name="operator">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
        <option value="%">%</option>
        <option value="^">^</option>
    </select>
    <input type="text" name="num2" required>
    <input type="submit" value="Calculate">
</form>
<p>Result: <?php echo $result; ?></p>