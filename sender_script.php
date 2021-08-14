<?php
    include 'connection.php';

    $Sender_Account_No = $_POST['sender_account'];
    $Sender_Name = mysqli_real_escape_string($connection,$_POST['full_name']);
    $INR =  $_POST['inr'];
    $Purpose =  mysqli_real_escape_string($connection,$_POST['purpose']); 

    $sender_registration_query = "INSERT INTO `sender details` (`Sender Account No.`, `Sender Name`, `INR`, `Purpose`) 
                                values ('$Sender_Account_No ','$Sender_Name', '$INR', '$Purpose' )";

    $sender_registration_submit = mysqli_query($connection,$sender_registration_query) ;
    

    if($sender_registration_submit){
       ?>
            <Script>
                document.getElementById('Sender_Submit').innerHTML = window.open("receiver.php");
            </Script>
       <?php
    }
    else{
        echo "The record was not inserted successfully because of this error ---> ". mysqli_error($connection);
    }

    $_SESSION['sender_account'] = $Sender_Account_No;
    $_SESSION['sender_id'] = mysqli_insert_id($connection);

?>