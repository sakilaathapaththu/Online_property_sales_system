<?php
    include_once 'config.php';

    if (isset($_POST['Submit'])) {
        // Rest of the code for processing the form data
    }
?>

<?php
	$firstName= $_POST['firstName'];
	$lastName= $_POST['lastName'];
	$nic = $_POST['nic'];
	$phoneNo= $_POST['phoneNo'];
	$address= $_POST['address'];
    $Gender= $_POST['Gender'];
	$email= $_POST['email'];
	
	
	
	if (mysqli_query($conn, "UPDATE sellerregistration SET `FirstName`='".$firstName."', `LastName`='".$lastName."', `phoneNo`='".$phoneNo."', `address`='".$address."', `Gender`='".$Gender."', `Email`='".$email."' WHERE `NIC`='".$nic."'")){

		echo "<script>alert('Data Inserted Succesfully')</script>";
		header("Location:allaccountview.php");
		//can redirect to the main page.....
	}
	else{
		echo"<script>alert('Error in inserting records')</script>";
	}
	
	mysqli_close($conn);
?>
