<?php
$directory = "C:/xampp/htdocs/karan/PHP/";
if(!is_dir($directory)){
    mkdir($directory,077, true);
}

$files = scandir($directory);
if($files!==false){
    foreach($files as $file){
        if($file != '.' && $file != '..'){
            echo "File:".$file."<br>";
        }
    }
} else{
    echo "Failed to open the directory";
}
?>