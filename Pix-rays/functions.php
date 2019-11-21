<?php include "db_connect.php";?>

<?php 

function registerdata(){
	global $connection;
if(isset($_POST['submit'])) {


$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];	
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$city= $_POST['city'];
$zip = $_POST['zip'];

$firstname = mysqli_real_escape_string($connection, $firstname );
$lastname = mysqli_real_escape_string($connection, $lastname );	
$username = mysqli_real_escape_string($connection, $username );
$password = mysqli_real_escape_string($connection, $password );
$email = mysqli_real_escape_string($connection, $email );
$mobile = mysqli_real_escape_string($connection, $mobile );
$address = mysqli_real_escape_string($connection, $address );
$gender = mysqli_real_escape_string($connection, $gender );
$city= mysqli_real_escape_string($connection, $city );
$zip = mysqli_real_escape_string($connection, $zip );

if (empty($firstname) || empty($lastname) || empty($username) || empty($password) || empty($email) || empty($mobile) || empty($address) || empty($state) || empty($city) || empty($zip)) {
   header("Location: register.php?singup=empty");
   exit();
}






$hashFormate = "$2y$10$";

$salt = "youcantseethepasswordp";
$hashF_and_salt = $hashFormate . $salt;

$password = crypt($password,$hashF_and_salt);

$query= "INSERT INTO registered(firstname,lastname,username,password,email,mobile,address,state,city,zip)";
$query .="VALUES ('$firstname','$lastname','$username','$password','$email','$mobile','$address','$gender','$city','$zip')";

$result=mysqli_query($connection,$query);

if (!$result) {
    die('query FAILED'.mysqli_error());
}
}
}

?>