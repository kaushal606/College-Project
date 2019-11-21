<?php
$connection= mysqli_connect('localhost','root','','formdb');
if ($connection) {
	echo "Connected successfully";	
} else {
	die("connection failed");
}

$query= "SELECT * FROM users";



$result=mysqli_query($connection,$query);

if (!$result) {
    die('query FAILED'.mysqli_error());
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
<?php 

while ($row=mysqli_fetch_assoc($result)) {

  ?>

  <pre>
    <?php 
  print_r($row);
     ?>
  </pre>
<?php

  
} 
?>

</div>
</div>    

	
</body>
</html>