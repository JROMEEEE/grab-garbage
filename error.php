<?php
    if(isset($_POST["returnMenu"])){
        header('Location: index.php');
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grab my Garbage!</title>
    <link rel="stylesheet" href="https://unpkg.com/mvp.css"> 
</head>
<body>
    <form method="post">
        <h1>Sorry, something went wrong. Please try again.</h1>
        <h1>Make sure input is valid. We are available between 7am and 12pm and only on weekdays.</h1>
        <input type="submit" class="btn btn-primary mt-4" value="Return to Form" name="returnMenu">
    </form>
</body>
</html>