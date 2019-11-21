<?php include "db.php";?>
<?php include "function.php";?>

<?php 
if (isset($_POST['submit'])) {

$username = $_POST['username'];
$password = $_POST['password'];
$id = $_POST['id'];

$query="UPDATE users SET ";
$query.="username='$username', ";
$query.="password='$password' ";
$query.="WHERE id=$id ";

$result = mysqli_query($connection, $query);
if (!$result) {
  die("QUERY FAILED" . mysqli_error($connection));
}

}

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
<div class="container ">
  <div class="col-sm-6">
        <form action="form_update.php" method="post">
          <div class="form-group">
            <lable for="username">Username</lable>
            <input type="text" name="username" class="form-control">
          </div>
           <div class="form-group">
            <lable for="password">Password</lable>
            <input type="password" name="password" class="form-control">
          </div>
          <div class="form-group">

            <select name="id" id="">
              <?php
              showalldata();
               ?>
            </select>
          </div>
          <input class="btn btn-primary" type="submit" name="submit" value="Update">
          

        </form>
    </div>

    
</form>
</div>

	
</body>
</html>