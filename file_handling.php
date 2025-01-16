<?php 
$file = fopen("xyz.txt","w");
if($file){
    fwrite($file,"Karan Attri"."<br>");
    fclose($file);
    $file = fopen("xyz.txt","r");
    print("Content : ". fgets($file)); // use echo or print() to print the content
    fclose($file);
} else {
    echo "unable to open the file."."<br>";
}

$abc = array("karan",1); // arrays
print_r($abc);
?>