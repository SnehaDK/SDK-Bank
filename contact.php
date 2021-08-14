<!DOCTYPE> 
<html>
<html lang="en">
  <head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Contact</title>

    <style>
        <?php include 'style.css'; ?>
  </style>
  </head>
  <body>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->

  <div class="row container-fluid">
    <div id="full-navbar" class="navbar">
                <div id="header">
                  <ul type="none">
                    <li class="logo">SDK Bank</li>
                  </ul>
                </div>
                <nav>
                      <ul class="navbar" type="none">
                        <li><a href="index.php">Home</a></li>

                        <li><a href="contact.php">Contact Us</a></li>
                      </ul>
                </nav>
      </div>
  </div>
  
   <div class="container my-4">
       <h2>Contact Us</h2>
       <form>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
          <div class="mb-3">
            <label for="exampleControlSelect1" class="form-label">Select your Query Type</label>
            <select class="form-control" id="exampleFormControlSelect1">
                <option>Account Problem</option>
                <option>Customer Problem</option>
                <option>Others</option>
            </select>
          </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Are you a existing customer of SDK bank ?</label>
        </div>
        <div class="mb-3">
            <label for="exampleInputAlphabate" class="form-label">Detailed Description about your query</label>
            <input type="text-area" class="form-control" id="exampleInputPassword1">
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
        
    </div>

    <footer class="container">
      <p class="float-end"><a href="#">Back to top</a></p>
      <p>© 2021-2021 SDK_Bank, Inc. · <a href="terms.php">Conditions</a> · <a href="terms.php">Terms</a></p>
    </footer>

  </body>
 </html>   