<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name = $_POST["fullname"];
    $address = $_POST["address"];
    $phone = $_POST["phonenumber"];
    $garbageType = $_POST["garbagetype"];
    $datetime = $_POST["collectiondatetime"];

    $collectionTimestamp = strtotime($datetime);

    if (!$collectionTimestamp) {
        echo 'Invalid input: please enter a valid date and time';
        exit;
    }

    $collectionDay = date('w', $collectionTimestamp);
    if ($collectionDay == 0 || $collectionDay == 6) {
        header('Location: error.php');
        exit;
    }
    
    $startTime = strtotime('07:00:00', $collectionTimestamp);
    $endTime = strtotime('12:00:00', $collectionTimestamp);
    if($collectionTimestamp < $startTime || $collectionTimestamp > $endTime) {
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
        "Collection Date and Time: $datetime"
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