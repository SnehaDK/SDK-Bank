<!DOCTYPE html>
        <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <title>Form</title>
      <!-- panel heading -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Diplomata+SC&display=swap" rel="stylesheet">
     <style>
        .row_style{
            margin-top : 20px;
        }
        body{
        background-image: url("https://source.unsplash.com/1600x900/?bank,technology");
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
    #receiver_submit{
        margin-left: 45rem;
    }
    #receiver_submit:hover{
        box-shadow: 0 4px rgb(252, 247, 247);
        transform: translateY(2px);
    }
     </style>

</head>

<body>

    <div class="row container-fluid">
        <div class="container">
            <div class="row row_style">


            <div class="col-xs-6 col-xs-offset-3">
                <div class="panel panel-primary">
        
                
                   <div class="panel-heading">
                       <h3>To</h3>
                       <p>Receiver</p>
                   </div>

                   <div class="panel-body">
                    <form method = "POST" action="receiver_script.php">
                
                
               
                   <div class="form-group">
                                <label for="receiver_account">Account Number</label>
                                <input type="number" class="form-control" id="email" name="receiver_account" placeholder="write your account number">
                            </div>

                       <div class="form-group">
                           <label for = "full_name2">Name</label>
                          <input type="text" class="form-control" name="full_name2" placeholder="write receiver's full name">
                       </div>

                       <div class="form-group">
                           <label for = "account_type">Account Type</label>
                           <input type="text" class = "form-control" name="account_type" placeholder="savings/current">
                       </div>

                       <div class="form-group">
                           <label for = "bank_name">Bank Name</label>
                           <input type="text" class= "form-control" name="bank_name" placeholder="bank name">
                       </div>

                       <div class="form-group">
                           <label for = "branch_name">Branch Name</label>
                           <input type="text" class= "form-control" name="branch_name" placeholder="branch name">
                       </div>

                       <div class="form-group">
                           <label for = "ifsc_code">IFSC Code</label>
                           <input type="text" class= "form-control" name="ifsc_code" placeholder="IFSC code">
                       </div>
                       <button type = "submit" id="receiver_submit" class= "btn btn-primary" value= "registration_submit">Submit</button>
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