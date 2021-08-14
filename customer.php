<?php
include 'connection.php';


$selectquery =  "SELECT * FROM `customers`";
$result = mysqli_query($connection,$selectquery);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Details</title>
    <style>
    <?php include 'style.css'; ?>
    </style>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
    <!-- font effect over heading -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=neon|outline|emboss|shadow-multiple">
    <!-- heading -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Faster+One&display=swap" rel="stylesheet">
</head>
<body id="customer">
<?php
if (mysqli_num_rows($result) > 0) {
?>
    <h1 id="customer-table-heading">Customers Details</h1>
    <table id="table">
        <thead>
            <tr>
                <th>id</td>
                <th>Name</td>
                <th>Email</td>
                <th>Current_Balance</td>
            </tr>
        </thead>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
    <tbody>
        <tr id="table_row">
            <td><?php echo $row["id"]; ?></td>
            <td><?php echo $row["Name"]; ?></td>
            <td><?php echo $row["Email"]; ?></td>
            <td><?php echo $row["Current Balance"]; ?></td>
                        <!-- Transfer Button -->
            <td><a href="sender.php"><button id= "transfer_button">Transfer</button></a></td>
        </tr>
    </tbody>
    
<?php
$i++;
}
?>
    </table>
<?php
} // complete if statement

else{
    echo "No result found";
}
?>
</body>
</html>