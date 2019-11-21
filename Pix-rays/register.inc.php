<?php 
if (isset($_POST['submit'])) {

	require 'db_connect.inc.php';

	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];	
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $city= $_POST['city'];
    $zip = $_POST['zip'];


    if (empty($firstname) || empty($lastname) || empty($username) || empty($password) || empty($cpassword) ||  empty($email) || empty($mobile) || empty($address) || empty($gender) || empty($city) || empty($zip)) {
    	header("Location: register.php?error=emptyfields&firstname=".$firstname."&lastname=".$lastname."&username=".$username."&email=".$email."&mobile=".$mobile."&address=".$address."&gender=".$gender."&city=".$city."&zip=".$zip);
    	exit();
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z]*$/", $firstname) && !preg_match("/^[a-zA-Z]*$/", $lastname) && !preg_match("/^[a-zA-Z0-9]*$/", $username) && !preg_match("/^[0-9]*$/", $mobile) && !preg_match("/^[0-9]*$/", $zip)) {
    	header("Location: register.php?error=invalidallfields");
    	exit();
    }

    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    	header("Location: register.php?error=invalidemail&firstname=".$firstname."&lastname=".$lastname."&username=".$username."&mobile=".$mobile."&address=".$address."&gender=".$gender."&city=".$city."&zip=".$zip);
    	exit();
    }
    elseif (!preg_match("/^[a-zA-Z]*$/", $firstname)) {
    	header("Location: register.php?error=invalidfirstname&lastname=".$lastname."&username=".$username."&email=".$email."&mobile=".$mobile."&address=".$address."&gender=".$gender."&city=".$city."&zip=".$zip);
    	exit();
    }
    elseif (!preg_match("/^[a-zA-Z]*$/", $lastname)) {
    	header("Location: register.php?error=invalidlastname&firstname=".$firstname."&username=".$username."&email=".$email."&mobile=".$mobile."&address=".$address."&gender=".$gender."&city=".$city."&zip=".$zip);
    	exit();
    }
     elseif (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
    	header("Location: register.php?error=invalidusername&firstname=".$firstname."&lastname=".$lastname."&email=".$email."&mobile=".$mobile."&address=".$address."&gender=".$gender."&city=".$city."&zip=".$zip);
    	exit();
    }
    elseif ($password !== $cpassword) {
    	header("Location: register.php?error=passwordcheck&firstname=".$firstname."&lastname=".$lastname."&username=".$username."&email=".$email."&mobile=".$mobile."&address=".$address."&gender=".$gender."&city=".$city."&zip=".$zip);
    	exit();
    }
    elseif (!preg_match("/^[0-9]*$/", $mobile)) {
    	header("Location: register.php?error=invalidmobile&firstname=".$firstname."&lastname=".$lastname."&username=".$username."&email=".$email."&address=".$address."&gender=".$gender."&city=".$city."&zip=".$zip);
    	exit();
    }	
	elseif (!preg_match("/^[0-9]*$/", $zip)) {
    	header("Location: register.php?error=invalidzip&firstname=".$firstname."&lastname=".$lastname."&username=".$username."&email=".$email."&mobile=".$mobile."&address=".$address."&gender=".$gender."&city=".$city);
    	exit();
    }	
    
    else{
    	
    	$query = "SELECT username FROM registered WHERE username=?;";
    	$stmt = mysqli_stmt_init($connection);
    	if (!mysqli_stmt_prepare($stmt, $query)) {
    		header("Location: register.php?error=sqlerrorrrr");
    		exit();
    	}
    	else {
    		mysqli_stmt_bind_param($stmt,"s",$username);
    		mysqli_stmt_execute($stmt);
    		mysqli_stmt_store_result($stmt);
    		$resultCheck = mysqli_stmt_num_rows($stmt);
    		if ($resultCheck > 0) {
    			header("Location: register.php?error=usertaken&firstname=".$firstname."&lastname=".$lastname."&email=".$email."&mobile=".$mobile."&address=".$address."&gender=".$gender."&city=".$city."&zip=".$zip);
    		exit();
    		}
    		else{
    			$query = "INSERT INTO registered(firstname,lastname,username,password,email,mobile, address,gender,city,zip) VALUES (?,?,?,?,?,?,?,?,?,?)";
    			$stmt = mysqli_stmt_init($connection);
    			if (!mysqli_stmt_prepare($stmt, $query)) {
    		header("Location: register.php?error=sqlerror");
    		exit();
    	}
    	else {
    		$hashedpwd = password_hash($password, PASSWORD_DEFAULT);



    		mysqli_stmt_bind_param($stmt,"sssssssssi", $firstname, $lastname, $username, $hashedpwd, $email, $mobile, $address, $gender, $city, $zip);
    		mysqli_stmt_execute($stmt);
    		header("Location: register.php?register=success");
    		exit();


    	       }

    		}
    		

    	}

    }
    mysqli_stmt_close($stmt);
    msqli_close($connection);


}
else {
	header("Location: register.php");
	exit();

}








 ?>