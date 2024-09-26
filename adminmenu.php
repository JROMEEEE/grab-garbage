<?php include('dbconnect.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Menu</title>
    <link rel="stylesheet" href="https://unpkg.com/mvp.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="box1">
        <h1>Database Menu</h1>
        <button class="btn btn-primary mt-4">Remove Request</button>
    </div>

    <div class='container'>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Address</th>
                <th>Phone Number</th>
                <th>Garbage Type</th>
                <th>Collection Date</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $query = 'select * from `user_detail`';
                $result = mysqli_query($connection, $query);

                if(!$result){
                    die("Query failed: ".mysqli_error($connection));
                } else{
                    while($row = mysqli_fetch_assoc($result)){
                    ?>
                    <tr>
                        <td><?php echo $row['request_id']; ?></td>
                        <td><?php echo $row['user_fullname']; ?></td>
                        <td><?php echo $row['user_address']; ?></td>
                        <td><?php echo $row['user_phonenumber']; ?></td>
                        <td><?php echo $row['garbage_type']; ?></td>
                        <td><?php echo $row['request_date']; ?></td>
                    </tr>
                    <?php
                }
             }
            ?>
        </tbody>
    </table>
    </div>
    <form action="index.html" method="get">
            <button type="submit">Redirect to Menu</button>
        </form>
</body>
</html>