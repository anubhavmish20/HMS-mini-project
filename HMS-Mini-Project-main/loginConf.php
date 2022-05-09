<?php
    $con = mysqli_connect("localhost", "root", "", "hospital") or die(mysqli_error($con));
    $emailID = $_POST['username'];
	$password = $_POST['password'];
    $query = "SELECT * FROM `login-details` WHERE `Username/ID` = '$emailID' AND `Password` = '$password'";
	$query_result = mysqli_query($con,$query);
	$rows = mysqli_num_rows($query_result);
    if ($rows>0) {
		header("Location: index.php");
	}
    else{
		echo "Wrong Credentials";
	}
?>