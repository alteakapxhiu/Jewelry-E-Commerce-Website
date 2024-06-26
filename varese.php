<?php
$emri = $_POST['emri'];
$psw = $_POST['psw'];

	// Database connection
	$conn = new mysqli('localhost','root','','alisa');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$query = "INSERT INTO form(emri, psw) ";
		$stmt = $conn->prepare("INSERT INTO form(emri,psw) values(?, ?)");
		$stmt->bind_param("ss",$emri, $psw);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>