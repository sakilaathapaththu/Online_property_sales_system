<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$date = $_POST['date'];
	$message = $_POST['message'];

	// Database connection
	$conn = new mysqli('localhost', 'root', '', 'onlinepropertysalessystem');
	if ($conn->connect_error) {
		die('Connection Failed: ' . $conn->connect_error);
	} else {
		$stmt = $conn->prepare("INSERT INTO userreport (FullName, Email, Date, Message) VALUES (?, ?, ?, ?)");
		$stmt->bind_param("ssss", $name, $email, $date, $message);
		$stmt->execute();
		echo "Your Report has been successfully submitted.";

		echo "<script> 
			window.location.replace(\"../home.html\");
		</script>";

		$stmt->close();
		$conn->close();
	}
?>
