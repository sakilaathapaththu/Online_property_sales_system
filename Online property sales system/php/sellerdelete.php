<?php
include_once 'config.php';

// Check if the NIC parameter is present in the URL
if (isset($_GET["NIC"])) {
  // Retrieve the NIC from the URL parameter
  $NIC = $_GET["NIC"];

  // Delete the seller record from the database based on the NIC
  $query = "DELETE FROM sellerregistration WHERE NIC = '$NIC'";
  $result = mysqli_query($conn, $query);

  // Check if the deletion was successful
  if ($result) {
    echo "<script>alert('Data Delete Succesfully')</script>";
    header("Location:allaccountview.php");
  } else {
    echo "Error deleting seller record: " . mysqli_error($conn);
  }
} else {
  echo "NIC parameter not provided in the URL.";
}
?>

