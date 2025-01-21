<?php 
$color = array("red","green","blue");

foreach($color as $b){
    echo "the color is : ".$b."\n";
}

// dictionary

$student = array("Karan" => 20,"Archita"=>18);
foreach($student as $key=>$value){
    echo $key." ".$value."\n";
}

for($i=1;$i<=10;$i++){
    echo $i."\n";
    if($i==5){
        break;
    }
}

for($i=1;$i<=3;$i++){
    for($j=1;$j<=3;$j++){
        echo $i." ".$j."\n";
        if($i==2 && $j==2){
            break;
        }
    }
}
?>