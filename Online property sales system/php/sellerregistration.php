<?php
	$firstName= $_POST['firstName'];
	$lastName= $_POST['lastName'];
	$nic = $_POST['nic'];
	$phoneNo= $_POST['phoneNo'];
	$address= $_POST['address'];
    $Gender= $_POST['Gender'];
	$email= $_POST['email'];
	$passwrod= $_POST['password'];
	/*$repassword= $_POST['repassword'];*/

	//database connection

	$conn= new mysqli('localhost','root','','onlinepropertysalessystem');
	if ($conn->connect_error){
		die('Connection Failed : '.$conn->connect_error);
	}else{
		$stmt = $conn->prepare("INSERT INTO sellerregistration (FirstName, LastName, NIC, PhoneNo, Address, Email, Password, Gender) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssss", $firstName, $lastName, $nic, $phoneNo, $address, $email, $passwrod, $Gender);
        $stmt->execute();
		echo "Yor Registration is Successfully....";
		
			echo "<script> 
			window.location.replace(\"../home.html\");
			</script>";
		$stmt->close();
		$conn->close();
	}

?>  