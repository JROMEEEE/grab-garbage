<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/mvp.css">
</head>
<body>
<div class="container">
        <h1>Grab my Garbage Request System</h1>
        <label for="">Enter Details:</label>
        <form action="process.php" method="post">

            <input type="text" class="form-control m-t-4" name="fullname" id="" placeholder="Full Name:" required>
            <br>
            <input type="text" class="form-control m-t-4" name="address" id="" placeholder="Address:" required>
            <br>
            <input type="text" class="form-control m-t-4" name="phonenumber" id="" placeholder="Phone Number:" required>
            <br>
            <input type="text" class="form-control m-t-4" name="garbagetype" id="" placeholder="Garbage Type:" required>
            <br>
            
            <label for="">Collection Date and Time (7am-12pm) Closed on Weekends:</label>
            <input type="date" class="form-control m-t-4" name="collectiondate" id="" placeholder="Collection Date:" required>
            <br>

            <input type="submit" class="btn btn-primary mt-4" value="Send" name="submit">
        </form>

        <form action="index.php" method="get">
                <button type="submit">Redirect to Menu</button>
            </form>
    </div>
</body>
</html>