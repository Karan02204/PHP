<?php
define("pi",3.14); // two methods to define constant variables
const x =10;
function show(){
    echo "the value of pi is ".pi."\n";
    echo "the value of pi is ".x."\n";
}

//show();

// $name = array("Harry","Larry","Carry","Marry");
// //print_r($name);
// for ($i=0;$i<count($name);$i++){
//     echo "$name[$i]\n";
// }

// $n=array(1,2,3,4,5);
// foreach($n as $value){
//     echo "$value\n";
// }

// $array1 = [10,"karan",1.55,true];
// print_r($array1);

// $array2 = array(
//     "name" => "karan",
//     "age" => 20,
// );
// print_r($array2);

// $arr2 = [0=>10,1=>20,2=>30];
// foreach($arr2 as $key=>$value){
//     echo "The value of $key is $value\n";
// }

// $branch["CSE"] = "Computer Science and Engineering";
// $branch["IT"] = "Information Technology";
// $branch["EC"] = "Electronics and Communication";
// $branch["CE"] = "Civil Engineering";
// $branch["ME"] = "Mechanical Engineering";
// print_r($branch);

// $result = array(
//     array("Karan",20,100),
//     array("Harry",21,200),
//     array("Larry",22,300),
//     array("Marry",23,400),
// );
// echo $result[0][0]." ".$result[0][1]." ".$result[0][2]."\n";
// echo $result[1][0]." ".$result[1][1]." ".$result[1][2]."\n";
// echo $result[2][0]." ".$result[2][1]." ".$result[2][2]."\n";
// echo $result[3][0]." ".$result[3][1]." ".$result[3][2]."\n";

$books=array("C++"=>array("name"=>"Karan","copies"=>8),
            "Java"=>array("name"=>"Harry","copies"=>10),
            "Python"=>array("name"=>"Larry","copies"=>15),
            "PHP"=>array("name"=>"Marry","copies"=>5),
);

// foreach($books as $book=>$value){
//     echo "The name of the book is ".$value["name"]." and the copies are ".$value["copies"]."\n";
// }

// $keys = array_keys($books);
// for($i=0;$i<count($books);$i++){
//     echo "$keys[$i] ";
//     foreach($books[$keys[$i]] as $key=>$value){
//         echo $key." = ".$value."\n";
//     }
// }

// $number = array(1,2,3,4,5,6,7,8,9,10);
// for($i=count($number)-1;$i>=0;$i--){
//     echo $number[$i]."\n";
// }

// $names = array("Karan","Kiran","Karun","Karib");
// sort($names);
// print_r($names);

// $students = array("name"=>"Karan","age"=>20,"marks"=>100);
// if(array_key_exists("name",$students)){
//     echo "Key exists\n";
// } else{
//     echo "key does not exist\n";
// }

$number = range(0,5);
print_r($number);

$alphabets = range("A","Z");
print_r($alphabets);
?>