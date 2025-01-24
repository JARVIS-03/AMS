<?php
	$fullname = $_POST['fullname'];
	$username = $_POST['username'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
	$number = $_POST['number'];

	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(fullname, username, gender, email, password, cpassword, number) values(?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssssi", $fullname, $username, $gender, $email, $password, $cpassword, $number);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>