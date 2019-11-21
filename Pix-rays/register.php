<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Register</title>

    <!-- Bootstrap core CSS -->
     <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/register.css" rel="stylesheet">
  </head>

  <body class="bg-light" onload="myfunction()">
      <!-- Preloader -->

    <div id="preloader">

  <div class="sk-spinner sk-spinner-pulse"></div>

</div>

    <div class="container">
      <div class="py-2 text-center">
        <img class="d-block mx-auto mb-2" src="vendor/address-card.svg" alt="" width="72" height="72">
        <h2>Register</h2>
        <p class="lead">Make sure you give your info correctly.</p>
         <?php
              error_reporting(0);
      if (isset($_GET[error])) {
        if ($_GET[error] == "emptyfields") {
          echo '<p class="text-danger">Please fill in all the fields.!</p>';
        }
        if ($_GET[error] == "invalidallfields") {
          echo '<p class="text-danger">All the fields are invalid.!</p>';
        }
        if ($_GET[error] == "usertaken") {
          echo '<p class="text-danger">This User already exists.!</p>';
        }      
        }
        ?>
        <?php
              error_reporting(0);
      if (isset($_GET[register])) {
        if ($_GET[register] == "success") {
          echo '<h3><p style="color: darkorchid;">You have been registered successfully.!</p></h3>';
        }
        }
        ?>
        
      </div>
      
  
        <div class="container">
        <div class="col-md-8 offset-md-2 order-md-1">
          <h4 class="mb-3">Fill up your details</h4>
          <form class="needs-validation" action="register.inc.php" method="post" novalidate  >
            <div class="row">
              <div class="col-md-6 mb-3">
               
                <label for="firstName">First name</label>                
                <input type="text" class="form-control"  name="firstname" placeholder="John" value="" required>
                <?php
              error_reporting(0);
      if (isset($_GET[error])) {
        if ($_GET[error] == "invalidfirstname") {
          echo '<p class="text-danger">Invalid First Name.!</p>';
        }
        }
        ?>                
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Last name</label>                
                <input type="text" class="form-control"  name="lastname" placeholder="Smith" value="" required>
                <?php
              error_reporting(0);
      if (isset($_GET[error])) {
        if ($_GET[error] == "invalidlastname") {
          echo '<p class="text-danger">Invalid Last Name.!</p>';
        }
        }
        ?>              
              </div>
            </div>

            <div class="mb-3">
              <label for="username">Username</label>          
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">@</span>
                </div>
                <input type="text" class="form-control" name="username" placeholder="Username" required>
                <?php
              error_reporting(0);
      if (isset($_GET[error])) {
        if ($_GET[error] == "invalidusername") {
          echo '<p class="text-danger">Invalid Username.!</p>';
        }
        }
        ?>
               
              </div>
            </div>

            <div class="mb-3">
              <label for="password">Password <span class="text-muted">(Required)</span></label>
               <input type="password" class="form-control" name="password" placeholder="Password" required>               
            </div>

            <div class="mb-3">
              <label for="password">Confirm Password <span class="text-muted">(Required)</span></label>
               <input type="password" class="form-control" name="cpassword" placeholder="Password" required>
               <?php
              error_reporting(0);
      if (isset($_GET[error])) {
        if ($_GET[error] == "passwordcheck") {
          echo '<p class="text-danger">The passwords did not match.!</p>';
        }
        }
        ?>
            </div>

            <div class="mb-3">
              <label for="email">Email <span class="text-muted">(Optional)</span></label>
              <input type="email" class="form-control" name="email" placeholder="you@example.com">
                    <?php
              error_reporting(0);
      if (isset($_GET[error])) {
        if ($_GET[error] == "invalidemail") {
          echo '<p class="text-danger">Invalid Email.!</p>';
        }
        }
        ?>   
            </div>

            <div class="mb-3">
              <label for="address">Mobile Number</label>
              <input type="text" class="form-control" name="mobile" placeholder="9876543210" required>
              <?php
              error_reporting(0);
      if (isset($_GET[error])) {
        if ($_GET[error] == "invalidmobile") {
          echo '<p class="text-danger">Invalid mobile number.</p>';
        }
        }
        ?>
            </div>

            <div class="mb-3">
              <label for="address">Address</label>
              <input type="text" class="form-control" name="address" placeholder="1234 Main St" required>
              
            </div>

            



            <div class="row">
              <div class="col-md-5 mb-3">
                 <label for="gender">Gender</label>
                <select class="custom-select d-block w-100" name="gender" required>
                  <option value="">Choose...</option>
                  <option>Male</option>
                  <option>Female</option>
                  <option>Other</option>
                </select>
                
                
              </div>
              <div class="col-md-4 mb-3">
                <label for="city">City</label>
                <select class="custom-select d-block w-100" name="city" required>
                  <option value="">Choose...</option>
                  <option>Pune</option>
                  <option>Mumbai</option>
                </select>
               
               
              </div>
              <div class="col-md-3 mb-3">
                <label for="zip">Zip</label>
                <input type="text" class="form-control" name="zip" placeholder="" required>
                <?php
              error_reporting(0);
      if (isset($_GET[error])) {
        if ($_GET[error] == "invalidzip") {
          echo '<p class="text-danger">Invalid zip code.!</p>';
        }
        }
        ?>
                
              </div>
             </div>


                      
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit"  name="submit">Submit</button>
          </form>
        </div>
      </div>
      </div>

      </form>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2018-2019 Pix-Ray</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacy</a></li>
          <li class="list-inline-item"><a href="#">Terms</a></li>
          <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
      </footer>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script src="js/sweetalert.min.js"></script>
    <script>
     

    <script>      
            
      swal({
                title: "Thank you!",
                text: "You have been registered successfully!",
                icon: "success",
                button: "Okay",
                });  
                        
     </script>

     <!-- preloader script -->

     <script>
      

      var preloader = document.getElementById('preloader')

      function myfunction(){

        preloader.style.display = 'none';

      } 
    </script>

  </body>
</html>
