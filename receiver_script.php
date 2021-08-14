<?php
include "connection.php";

$Receiver_Account_No =  $_POST['receiver_account'];
$Receiver_Name =  mysqli_real_escape_string($connection,$_POST['full_name2']);
$Account_Type =  mysqli_real_escape_string($connection,$_POST['account_type']);
$Bank_Name =  mysqli_real_escape_string($connection,$_POST['bank_name']);
$Branch_Name =  mysqli_real_escape_string($connection,$_POST['branch_name']);
$IFSC_Code =  $_POST['ifsc_code'];

$receiver_registration_query = "INSERT INTO `receiver details` (`Receiver Account No.`, `Receiver Name`, `Account Type`, `Bank Name`, `Branch Name`, `IFSC Code`) 
                                values ('$Receiver_Account_No','$Receiver_Name', ' $Account_Type', '$Bank_Name', ' $Branch_Name', '$IFSC_Code'  )";

$receiver_registration_submit = mysqli_query($connection,$receiver_registration_query) ;

if($receiver_registration_submit){
    ?>
    <script>
        alert("You have succesfully Transfer !? ");
        document.getElementById('Sender_Submit').innerHTML = window.open("index.php");
    </script>
    <?php
}
else{
    echo "The record was not inserted successfully because of this error ---> ". mysqli_error($connection);
}

?>