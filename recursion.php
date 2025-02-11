<?php
//$number=readline("Enter a number: ");
function factorial($number){
    if($number==0 || $number==1){
        return 1;
    }

    return $number*factorial($number-1);
}

//echo factorial($number);

//$number = readline("Enter the count of number in the series: ");
function fibonacci($number){
    $a=0;
    $b=1;
    echo "Fibonacci series: ";
    for($i = 0; $i < $number; $i++){
        echo $a . " ";
        $next = $a + $b;
        $a = $b;
        $b = $next;
    }
}

//fibonacci($number);

$array2 = [1,2,3,4,5];
function printEvenOdd($array){
    $length = count($array);
    echo "Even Numbers: ";
    for($i=0;$i<$length;$i++){
        if($array[$i]%2==0){
            echo $array[$i]." ";
        }
    }
    echo "\n";
    echo "Odd Numbers: ";
    for($i=0;$i<$length;$i++){
        if($array[$i]%2!=0){
            echo $array[$i]." ";
        }
    }
}

//printEvenOdd($array2);

function listfiles($dir){
    $files = scandir($dir);
    foreach($files as $file){
        if($file == "." || $file == "..")continue;
        $path = $dir.DIRECTORY_SEPARATOR.$file;
        if(is_dir($path)){
            listfiles($path);
        } else{
            echo $path."\n";
        }
    }
}

listfiles("C:\\xampp\\htdocs");
?>