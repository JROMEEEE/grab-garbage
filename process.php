<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name = $_POST["fullname"];
    $address = $_POST["address"];
    $phone = $_POST["phonenumber"];
    $garbageType = $_POST["garbagetype"];
    $date = $_POST["collectiondate"];

    $collectionTimestamp = strtotime($date);

    if (!$collectionTimestamp) {
        echo 'Invalid input: please enter a valid date';
        exit;
    }

    $collectionDay = date('w', $collectionTimestamp);
    if ($collectionDay == 0 || $collectionDay == 6) {
        header('Location: error.php');
        exit;
    }

    $to = 'grabmygarbageproj@gmail.com';
    $subject = "Grab my Garbage Request!";
    $messageLines = array(
        "Name: $name",
        "Address: $address",
        "Phone Number: $phone",
        "Garbage Type: $garbageType",
        "Collection Date: $date"
    );
    $message = implode("\n", $messageLines);

    $headers = array(
        "From: grabmygarbageproj@gmail.com",
        "Reply-To: grabmygarbageproj@gmail.com",
        "MIME-Version: 1.0",
        "Content-Type: text/plain; charset=UTF-8"
    );
    $headersString = implode("\r\n", $headers);

    if(mail($to, $subject, $message, $headersString)){
        header('Location: index.php');
        exit;
    } else {
        header('Location: error.php');
        exit;
    }
}
?>