<?php
session_start();
if (isset($_SESSION['sender_id'])) {
  echo "Hello ".$_SESSION[‘sender_account’];
} else {
  echo "";
}
?>


<!DOCTYPE html>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!--jQuery library-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!--Latest compiled and minified JavaScript-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<title>Form</title>
<!-- heading -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Faster+One&display=swap" rel="stylesheet">

<!-- panel heading -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Diplomata+SC&display=swap" rel="stylesheet">
<style>
    .row_style {
        margin-top: 20px;
    }
    body{
        background-image: url("https://source.unsplash.com/1600x900/?bank,tec");
        background-size: 100% 150vh;
        background-repeat: no-repeat;
        background-position: center;
    }
    h1{
        text-align: center;
        font-family: 'Faster One', cursive;
        word-spacing: 3rem;
    }
    h3{
        font-family: 'Diplomata SC', cursive;
    }
    #Sender_Submit{
        margin-left: 45rem;
    }
    #Sender_Submit:hover{
        box-shadow: 0 4px rgb(252, 247, 247);
        transform: translateY(2px);
    }
</style>
</head>

<body>

    <div class="row container-fluid">
        <div class="container">
        <h1>Transaction Form</h1>
            <div class="row row_style">
                <div class="col-xs-6 col-xs-offset-3">
                    <div  class="panel panel-primary">


                        <div class="panel-heading">
                            <h3>From</h3>
                            <p>Sender</p>
                        </div>

                        <div class="panel-body">
                            <form method="POST" action="sender_script.php">



                                <div class="form-group">
                                    <label for="sender_account">Account Number</label>
                                    <input autofill="true" type="number" class="form-control" id="acount-no"
                                        name="sender_account" placeholder="write your account number">
                                </div>

                                <div class="form-group">
                                    <label for="full_name">Name</label>
                                    <input type="text" autofill="true" class="form-control" name="full_name"
                                        placeholder="write your full name">
                                </div>

                                <div class="form-group">
                                    <label for="inr">INR</label>
                                    <input type="number" autofill="true" class="form-control" name="inr"
                                        placeholder="Rs.">
                                </div>

                                <div class="form-group">
                                    <label for="purpose">Purpose</label>
                                    <input type="text" autofill="true" class="form-control" name="purpose"
                                        placeholder="for what purpose">
                                </div>
                                <button id="Sender_Submit" type="submit" class="btn btn-primary"
                                    value="registration_submit">Next</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        
    </div>
    <footer id="footer" class="container">
        <p class="float-end"><a href="#">Back to top</a></p>
        <p>© 2021-2022 SDK_Bank, Inc. · <a href="terms.php">Conditions</a> · <a href="terms.php">Terms</a></p>
    </footer>

</body>

</html>