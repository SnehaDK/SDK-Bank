<?php

$connection = mysqli_connect("localhost", "root", "", "banking_system") or die(mysqli_error($con));

if($connection){
    ?>
    <script>
        alert("Connection Successfull !");
    </script>
    <?php
}
else{
    die("No Connection". mysqli_connect_error());
}
?>