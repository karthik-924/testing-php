<?php
    $emailto="something@gmail.com";
    $subject="Hello";
    $body="Hello";
    $headers="From: nothing@gmail.com";
    if(mail($emailto,$subject,$body,$headers)){
        echo "Success";
    }else{
        echo "Failure";
    }
    include("helloworld.php")
?>