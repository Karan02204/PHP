<?php
function calcDivision($dividend, $divisor){
    if($divisor == 0){
        trigger_error("Division by zero error", E_USER_WARNING);
        return false;
    } else{
        return $dividend / $divisor;
    }
}
echo calcDivision(10, 0)."<br>";

?>