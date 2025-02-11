<?php
// function show(){
//     echo "Hello World";
// }

// show();

function cse($course,$credit){
    echo "Course: ".$course."\n";
    echo "Credit: ".$credit."\n";
}

// cse("CSE 110","3");

function sum($a,$b){
    return $a+$b;
}

// echo sum(2,4); // if you pass the value as string it will automatically convert it to integer and add and display the result


//default arguments
function show($i=10){
    echo "The value of i is ".$i."\n";
}

// show(20);
// show();

function add(float $a,float $b){
    return (int)($a+$b);
}

// $a = readline("Enter the first number : ");
// $b = readline("Enter the second number : ");
// echo add($a,$b);

function swap($a,$b){
    $temp = $a;
    $a = $b;
    $b = $temp;
    echo "The value of a is ".$a."\n";
    echo "The value of b is ".$b."\n";
}

// swap(2,3);

function multiply(&$number){
    $number = $number * 10;
    return $number;
}

// $number = 5;
// echo multiply($number);

$lang = "Php";


function display(){
    global $lang;
    echo $lang."\n";
    
    //$lang = "Python";
}

//display();
//echo $lang;

$array1=[1,2,3,4,5];
function reverse($array){
    $length = count($array);
    for($i=$length-1;$i>=0;$i--){
        echo $array[$i]." ";
    }
}

//reverse($array1);


?>