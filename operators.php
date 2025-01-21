<?php
$a=12;
$b=13.25;
echo "The value of a+b is: ".($a+$b)."\n";
echo "The value of a-b is: ".($a-$b)."\n";
echo "The value of a*b is: ".($a*$b)."\n";
echo "The value of a/b is: ".($a/$b)."\n";
echo "The value of a**b is: ".($a**$b)."\n";
echo "The value of a%b is: ".($a%$b)."\n";

echo "The value of 1: ".($a==$b)."\n";
echo "The value of 2: ".($a===$b)."\n";
echo "The value of 3: ".($a!=$b)."\n";
echo "The value of 4: ".($a!==$b)."\n";
echo "The value of 5: ".($a>$b)."\n";
echo "The value of 6: ".($a>=$b)."\n";
echo "The value of 7: ".($a<$b)."\n";
echo "The value of 8: ".($a<=$b)."\n";

var_dump($a==$b);
var_dump($a===$b);
var_dump($a!=$b);
var_dump($a!==$b);
var_dump($a>$b);
var_dump($a>=$b);
var_dump($a<$b);
var_dump($a<=$b);

//Increment and Decrement 
echo "The value of 1: ".($a++)."\n";
echo "The value of 2: ".(++$a)."\n";
echo "The value of 3: ".($b--)."\n";
echo "The value of 4: ".(--$b)."\n";
?>