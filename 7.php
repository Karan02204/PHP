<?php
function add(...$numbers){
    $sum =0;
    foreach($numbers as $num){
        $sum+=$num;
    }

    return $sum;
}

//echo "Result: ".add(1,2,3,4,5);

function add2(...$name){
    foreach($name as $n){
        $sum.=$n;
    }

    return $sum;
}

echo "Result: ".add2("Karan","Archita");
?>