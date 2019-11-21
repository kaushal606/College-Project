<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
     <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">


    <!-- Custom styles for this template -->
    <link href="css/login1.css" rel="stylesheet">
  </head>

  <body class="text-center" onload="myfunction()">
    <!-- Preloader -->

    <div id="preloader">

  <div class="sk-spinner sk-spinner-pulse"></div>

</div>
<div class="container"> 
<div class="row">
<div class="col-md-4 offset-md-4">
          <form class="login" action="login.inc.php" method="post" novalidate  >
            <i class="fas fa-user-edit fa-3x" style="color: black;"></i>
      <h1 class="h3 mb-2 font-weight-normal" style="color: black;">Please Login</h1>
      <?php
    error_reporting(0);
    if (isset($_GET[error])) {
        if ($_GET[error] == "emptyfields") {
          echo '<p class="text-danger">Please fill in all the fields.!</p>';
        }
        if ($_GET[error] == "wrongpassword") {
          echo '<p class="text-danger">You have entered a wrong password..!</p>';
        }
        if ($_GET[error] == "nouser") {
          echo '<p class="text-danger">There is no user with this Username..!</p>';
        }

      }
     ?> 

                   
            
              <div class="mt-5">              
               <input type="username" class="form-control form-control-lg" name="username" placeholder="Username" required>
            </div>          
              

            <div class="mb-3">              
               <input type="password" class="form-control form-control-lg" name="password" placeholder="Password" required>
            </div>

            <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
             <button class="btn btn-primary btn-lg btn-block" type="submit" name="login-submit">Login</button>
             <p class="mt-5 mb-3 text-muted">&copy; 2018-2019</p>
             
          
       </form>
     </div>
     </div>
     </div>
    <!-- preloader script -->

    <script> 
      function validation()
      {        
      swal({
                title: "Thank you!",
                text: "You have been registered successfully!",
                icon: "success",
                button: "Okay",
                });  
      }  
                        
     </script>
    
    <script src="js/sweetalert.min.js"></script>

     <script> 

      var preloader = document.getElementById('preloader')

      function myfunction(){

        preloader.style.display = 'none';

      }

    </script>

  </body>
</html>
