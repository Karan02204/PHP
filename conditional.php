<?php
// $i=1;
// while($i<5){
//     echo $i."\n";
//     $i++;
// }

// do{
//     echo $i."\n";
//     $i++;
// } while($i<6);

// for($i=0;$i<=10;$i++){
//     echo "The value of i : ".$i."\n";
// }
// echo "Enter today's day\n";
// $d = trim(fgets(STDIN));
// if($d=="Tue"){
//     echo "It's Tuesday!";
// }

// echo "Enter your Name:";
// $name = fgets(STDIN);
// echo "Enter your Age: ";
// $age = fgets(STDIN);
// echo "Name: ".$name;
// echo "Age: ".$age;

// $d=trim(fgets(STDIN));
// if($d%2==0){
//     echo "Even day";
// } else{
//     echo "odd day";
// }

// $t=date("H");
// if($t<"2"){
//     echo "Have a good day";
// } else{
//     echo "Have a bad day";
// }

// $marks = trim(fgets(STDIN));
// if($marks < 33){
//     echo "Fail";
// } else if($marks >= 34 && $marks < 50){
//     echo "D grade";
// } else if($marks >=50 && $marks < 80){
//     echo "C grade";
// } else if($marks >=80 && $marks < 90){
//     echo "A grade";
// } else if($marks >=90 && $marks <= 100){
//     echo "A+ grade";
// } else {
//     echo "Invalid input";
// } 

//ternary operator

//$age = trim(fgets(STDIN));
// echo ($age<18)?"Child":"Adult";

// switch($age){
//     case 1:
//         echo "One";
//         break;
//     case 2:
//         echo "Two";
//         break;
//     case 3:
//         echo "Three";
//         break;
//     default:
//         echo "Invalid input";
// }

echo "Enter first number: ";
$num1 = trim(fgets(STDIN));
echo "Enter second number: ";
$num2 = trim(fgets(STDIN));
echo "Enter operation (+, -, *, /): ";
$operation = trim(fgets(STDIN));

switch($operation) {
    case '+':
        echo "Result: " . ($num1 + $num2);
        break;
    case '-':
        echo "Result: " . ($num1 - $num2);
        break;
    case '*':
        echo "Result: " . ($num1 * $num2);
        break;
    case '/':
        if ($num2 != 0) {
            echo "Result: " . ($num1 / $num2);
        } else {
            echo "Cannot divide by zero";
        }
        break;
    default:
        echo "Invalid operation";
}
?>