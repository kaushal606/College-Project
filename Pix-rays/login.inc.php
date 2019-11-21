<?php 
if (isset($_POST['login-submit'])) {

	require 'db_connect.inc.php';

	$username = $_POST['username'];
	$password = $_POST['password'];


	if (empty($username) || empty($password)) {
		header("Location: login.php?error=emptyfields");
    		exit();
	}
	else {
		$query = "SELECT * FROM registered WHERE username=? OR email=?;";
		$stmt = mysqli_stmt_init($connection);
		if (!mysqli_stmt_prepare($stmt, $query)) {
			header("Location: login.php?error=sqlerror");
    		exit();
		}
	
	else {

		mysqli_stmt_bind_param($stmt,"ss", $username, $username);
    	mysqli_stmt_execute($stmt);
    	$result = mysqli_stmt_get_result($stmt);
    	if ($row = mysqli_fetch_assoc($result)) {
    		$passwordcheck = password_verify($password, $row['password']);
    		if ($passwordcheck == false) {
    		header("Location: login.php?error=wrongpassword");
    		exit();	
    		}
    		else if ($passwordcheck == true) {
    			session_start();
    			$_SESSION['userid'] = $row['id'];
    			$_SESSION['username'] = $row['username'];


    		header("Location: index.php?login=success");
    		exit();
    		}
    		else {
    			header("Location: login.php?error=wrongpassword");
    		exit();
    		}
    	   }
    		else {
    			header("Location: login.php?error=nouser");
    		exit();
    		}       	
           	
    	   }
   		}

    }

  
?>