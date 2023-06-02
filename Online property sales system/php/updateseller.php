<?php
// Assuming you have already established a database connection
include_once 'config.php';

// Check if the MemberID parameter is present in the URL
if (isset($_GET["nic"])) {
  // Retrieve the nic from the URL parameter
  $nic = $_GET["nic"];

  // Query the database to fetch the seller details using the nic
  $query = "SELECT * FROM sellerregistration WHERE nic = '$nic'";
  $result = mysqli_query($connection, $query);

  // Check if the query was successful
  if ($result) {
    // Check if a seller record was found
    if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);

      // Extract the seller details from the fetched row
      $firstName = $row['firstName'];
      $lastName = $row['lastName'];
      $nic = $row['nic'];
      $phoneNo = $row['phoneNo'];
      $address = $row['address'];
      $email = $row['email'];
   
      $gender = $row['gender'];

      // Use the extracted values to populate the form fields
      echo '
      <script>
        window.onload = function() {
          document.getElementsByName("firstName")[0].value = "' . $firstName . '";
          document.getElementsByName("lastName")[0].value = "' . $lastName . '";
          document.getElementsByName("nic")[0].value = "' . $nic . '";
          document.getElementsByName("phoneNo")[0].value = "' . $phoneNo . '";
          document.getElementsByName("address")[0].value = "' . $address . '";
          document.getElementsByName("email")[0].value = "' . $email . '";
          
          document.querySelector(\'input[name="Gender"][value="' . $gender . '"]\').checked = true;
        }
      </script>
      ';
    } else {
      echo "Seller record not found.";
    }
  } else {
    echo "Error executing query: " . mysqli_error($connection);
  }
} 
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Form</title>
    <link href="../css/sellerregi.css" type="text/css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/styles.css">
    <link rel="stylesheet" href="../css/normalize.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="js/register.js"></script>
</head>
  <body>
	<!-- header -->
<div class="menu">
			
            <ul class="a">
                <div class="logo">
                    <img src="../images/logo.jpeg">
                </div>
                <button class="account"><a>Login</a></button>
                <button class="postads">Post Ads</button>
                <div class="search-bar">
                    <input type="text" placeholder="Enter Keywords">
                    <button type="submit">Search</button>
                </div>
                <li class="b"><a href="/index.html" class="c"> Home</a></li>
                <li class="b"><a href="/news.html" class="c"> News</a></li>
                <li class="b"><a href="/register.html" class="c"> Contact</a></li>
                <li class="b"><a href="/about.php" class="c"> About Us</a></li>
            </ul><!-- (e) -->
    
        </div>
	  
    <!-- Body of Form starts -->
  	<div class="container">
		<div class="regbox" >
		<label class="reg"><center> Seller Details Update!</center></label>
	  </div>
      <form action="selleredit.php"  method="POST">
        <!--First name-->
    		<div class="box">
          <label for="firstName" class="fl fontLabel"> First Name: </label>
    			<div class="new iconBox">
            <i class="fa fa-user" aria-hidden="true"></i>
          </div>
    			<div class="fr">
    					<input type="text" name="firstName" placeholder="First Name"
              class="textBox" autofocus="on" required>
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!--First name-->


        <!--Second name-->
    		<div class="box">
          <label for="lastName" class="fl fontLabel"> Last Name: </label>
    			<div class="fl iconBox"><i class="fa fa-user" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="text" required name="lastName"
              placeholder="Last Name" class="textBox">
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!--Second name-->
    		<!---NIC.------>
    		<div class="box">
          <label for="NIC" class="fl fontLabel"> NIC.: </label>
    			<div class="fl iconBox"><i class="fa fa-user" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="text" required name="nic" maxlength="12" placeholder="NIC." class="textBox">
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!---NIC.---->


    		<!---Phone No.------>
    		<div class="box">
          <label for="phone" class="fl fontLabel"> Phone No.: </label>
    			<div class="fl iconBox"><i class="fa fa-phone-square" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="text" required name="phoneNo" maxlength="10" placeholder="Phone No." class="textBox">
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!---Phone No.---->
    		
    		
			<!---Address.---->
			<div class="box">
          <label for="Address" class="fl fontLabel"> Address: </label>
    			<div class="fl iconBox"><i class="fa fa-user" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="text" required name="address"
              placeholder="Address" class="textBox">
    			</div>
    			<div class="clr"></div>
    		</div>
			<!---Address.---->
			
			
			
    		<!---Email ID---->
    		<div class="box">
          <label for="email" class="fl fontLabel"> Email ID: </label>
    			<div class="fl iconBox"><i class="fa fa-envelope" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="email" required name="email" placeholder="Email" class="textBox">
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!--Email ID----->

    		<!---Gender----->
    		<div class="box radio">
          <label for="gender" class="fl fontLabel"> Gender: </label>
    				<input type="radio" name="Gender" value="Male" required> Male &nbsp; &nbsp; &nbsp; &nbsp;
    				<input type="radio" name="Gender" value="Female" required> Female
    		</div>
    		<!---Gender--->

    		<!---Submit Button------>
    		<div class="box" >
    				<input type="Submit" id="submitbtn" name="Submit" class="submit" value="UPDATE" >
    		</div>
    		<!---Submit Button----->
			
      </form>
  </div>
  <!--Body of Form ends--->
  </body>
</html>
