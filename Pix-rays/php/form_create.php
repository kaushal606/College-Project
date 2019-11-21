<?php 
if(isset($_POST['submit'])) {

$username = $_POST['username'];
$password = $_POST['password'];
$connection= mysqli_connect('localhost','root','','formdb');
if ($connection) {
	echo "Connected successfully";	
} else {
	die("connection failed");
}

$query= "INSERT INTO users(username,password)";
$query .="VALUES ('$username','$password')";


$result=mysqli_query($connection,$query);

if (!$result) {
    die('query FAILED'.mysqli_error());
}
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">	
</head>
<body>
	<div class="container ">
	<div class="col-sm-6">
        <form action="form_create.php" method="post">
          <div class="form-group">
            <lable for="username">Username</lable>
            <input type="text" name="username" class="form-control">
          </div>
           <div class="form-group">
            <lable for="password">Password</lable>
            <input type="password" name="password" class="form-control">
          </div>
          <input class="btn btn-primary" type="submit" name="submit" value="Submit">

        </form>
    </div>

    
</form>
</div>
	
</body>
</html>