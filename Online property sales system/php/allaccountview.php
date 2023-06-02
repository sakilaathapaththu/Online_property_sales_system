<?php
include_once 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
    <style>
        .edit-button {
            display: inline-block;
            padding: 8px 16px;
            background-color: green;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            margin-right: 10px;
        }

        .delete-button {
            display: inline-block;
            padding: 8px 16px;
            background-color: red;
            color: white;
            text-decoration: none;
            border-radius: 4px;
        }
    </style>
	 <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <link rel="stylesheet" href="../css/normalize.css">
	<link rel="stylesheet" href="../css/viewregi.css"/>
	<script src="../js/register.js"></script>
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
<br><br><br><br><br><br><br><br><br><br>
<!-- update -->
 <div id="wrapper">
  <h1>User Account Details</h1>
  
  <table id="keywords" cellspacing="0" cellpadding="0">
    <thead>
      <tr>
        <th><span>MemberID</span></th>
        <th><span>FirstName</span></th>
        <th><span>LastName</span></th>
        <th><span>NIC</span></th>
        <th><span>PhoneNo</span></th>
        <th><span>Address</span></th>
        <th><span>Gender</span></th>
        <th><span>Email</span></th>
        <th><span>Password</span></th>
        <th><span>Action</span></th>
      </tr>
    </thead>
    <tbody>
    <?php
        $sql = "SELECT * FROM sellerregistration;";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["MemberID"] . "</td>";
                echo "<td>" . $row["FirstName"] . "</td>";
                echo "<td>" . $row["LastName"] . "</td>";
                echo "<td>" . $row["NIC"] . "</td>";
                echo "<td>" . $row["PhoneNo"] . "</td>";
                echo "<td>" . $row["Address"] . "</td>";
                echo "<td>" . $row["Gender"] . "</td>";
                echo "<td>" . $row["Email"] . "</td>";
                echo "<td>" . $row["Password"] . "</td>";
                echo "<td>";
                echo "<a href='updateseller.php?NIC=" . $row["NIC"] . "' class='edit-button'>Edit</a>";
                echo "<a href='sellerdelete.php?NIC=" . $row["NIC"] . "' class='delete-button'>Delete</a>";
                echo "</td>";

                echo "</tr>";

            }
        } else {
            echo "No details to display";
        }

        echo "</table>";

        $conn->close();
        ?>
    </tbody>
  </table>


 </div> 


</body>
</html>