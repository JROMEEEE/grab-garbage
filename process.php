<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name = $_POST["fullname"];
    $address = $_POST["address"];
    $phone = $_POST["phonenumber"];
    $garbageType = $_POST["garbagetype"];

    $to = 'grabmygarbageproj@gmail.com';
    $header = "From: $name";
    $subject = 'Grab my Garbage Request!';
    $message = <<<EOT
                    Name: $name
                    Address: $address
                    Phone Number: $phone
                    Garbage Type: $garbageType
                EOT;

    if(mail($to,$subject,$message,$header)){
        echo 'Email sent!';
    } else {
        echo 'Email sending failed!';
    }
}
?>