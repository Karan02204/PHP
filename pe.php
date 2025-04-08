<?php
$to = "karanattri022@gmail.com";
$sub = "second mail";
$message="This is a second mail";
$from = "karanattri022@gmail.com";
$headers = "From: $from";
$check = mail($to,$sub,$message,$headers);
if($check == true){
    echo "Mail sent successfully";
}
else{
    echo "Mail not sent";
}

?>