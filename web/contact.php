<?php
	$userName = $_POST['userName'];
	$userEmail = $_POST['userEmail'];
    $userPhone = $_POST['userPhone'];
    $userMsg = $_POST['userMsg'];

	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into contact(userName, userEmail, userPhone, userMsg) values(?, ?, ?, ?)");
		$stmt->bind_param("ssis", $userName, $userEmail, $userPhone, $userMsg);
		$execval = $stmt->execute();
		echo $execval;
		echo "Request Submitted successfully...";
		$stmt->close();
		$conn->close();
	}
?>