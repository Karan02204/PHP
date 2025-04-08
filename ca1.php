<?php
$students = array(
    "Ravi"=>array(90, 85, 80, 85, 83),
    "Krishna"=>array(60, 65, 70, 55, 58),
    "Vikash"=>array(40, 45, 35, 50, 45));

function generateReportCard($students){
    echo "<h1>Student Report Card</h1>";
    echo "<h1>---------------------------------</h1>";

    foreach($students as $student=>$marks){
        echo "<h2>$student - Average: ".Avg($marks)." - Grade: ".Grader(Avg($marks))."</h2>";
    }
}

function Avg($marks){
    $sum =0;
    for($i=0;$i<count($marks);$i++){
        $sum+=$marks[$i];
    }
    $Avg = $sum/count($marks);
    return number_format($Avg, 1);
}

function Grader($Avg){
    $Grade = "";
    switch ($Avg){
        case $Avg>=85:
            $Grade = "A";
            break;
        case $Avg>=70 && $Avg<85:
            $Grade = "B";
            break;
        case $Avg>=50 && $Avg<70:
            $Grade = "C";
            break;
        case $Avg<50:
            $Grade = "F";
            break;
        default:
            $Grade = "Invalid Grade";
            break;
    }

    return $Grade;
}

generateReportCard($students);
?>