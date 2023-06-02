<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Form</title>
  <link href="../css/sellerregi.css" type="text/css" rel="stylesheet">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="js/register.js"></script>
</head>
<body>
<?php
  $nic = $_GET['NIC'];

  include_once 'config.php';

  $sql = "SELECT * FROM sellerregistration WHERE NIC = '$nic'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
?>

<!-- Body of Form starts -->
<div class="container">
  <div class="regbox">
    <label class="reg"><center> Seller Details Update!</center></label>
  </div>
  <form action="selleredit.php" method="POST">
    <!--First name-->
    <div class="box">
      <label for="firstName" class="fl fontLabel"> First Name: </label>
      <div class="new iconBox">
        <i class="fa fa-user" aria-hidden="true"></i>
      </div>
      <div class="fr">
        <input type="text" name="firstName" placeholder="<?= $row['firstName'] ?>" class="textBox" autofocus="on">
      </div>
      <div class="clr"></div>
    </div>
    <!--First name-->

    <!--Second name-->
    <div class="box">
      <label for="lastName" class="fl fontLabel"> Last Name: </label>
      <div class="fl iconBox">
        <i class="fa fa-user" aria-hidden="true"></i>
      </div>
      <div class="fr">
        <input type="text" name="lastName" placeholder="<?= $row['lastName'] ?>" class="textBox">
      </div>
      <div class="clr"></div>
    </div>
    <!--Second name-->

    <!---NIC.------>
    <div class="box">
      <label for="NIC" class="fl fontLabel"> NIC.: </label>
      <div class="fl iconBox">
        <i class="fa fa-phone-square" aria-hidden="true"></i>
      </div>
      <div class="fr">
        <input type="text" name="nic" maxlength="12" placeholder="<?= $row['NIC'] ?>" class="textBox">
      </div>
      <div class="clr"></div>
    </div>
    <!---NIC.---->

    <!---Phone No.------>
    <div class="box">
      <label for="phone" class="fl fontLabel"> Phone No.: </label>
      <div class="fl iconBox">
        <i class="fa fa-phone-square" aria-hidden="true"></i>
      </div>
      <div class="fr">
        <input type="text" name="phoneNo" maxlength="10" placeholder="<?= $row['phoneNo'] ?>" class="textBox">
      </div>
      <div class="clr"></div>
    </div>
    <!---Phone No.---->

    <!---Address.---->
    <div class="box">
      <label for="Address" class="fl fontLabel"> Address: </label>
      <div class="fl iconBox">
        <i class="fa fa-user" aria-hidden="true"></i>
      </div>
      <div class="fr">
        <input type="text" name="address" placeholder="<?= $row['address'] ?>" class="textBox">
      </div>
      <div class="clr"></div>
    </div>
    <!---Address.---->

    <!---Email ID---->
    <div class="box">
      <label for="email" class="fl fontLabel"> Email ID: </label>
      <div class="fl iconBox">
        <i class="fa fa-envelope" aria-hidden="true"></i>
      </div>
      <div class="fr">
        <input type="email" name="email" placeholder="<?= $row['email'] ?>" class="textBox">
      </div>
      <div class="clr"></div>
    </div>
    <!--Email ID----->

    <!---Gender----->
    <div class="box radio">
      <label for="gender" class="fl fontLabel"> Gender: </label>
      <input type="radio" name="Gender" value="Male"> Male &nbsp; &nbsp; &nbsp; &nbsp;
      <input type="radio" name="Gender" value="Female"> Female
    </div>
    <!---Gender--->

    <!---Submit Button------>
    <div class="box" style="background: #2d3e3f">
      <button class="button" name="updateappo" default value="<?= $row['a_id'] ?>">Update</button>
    </div>
    <!---Submit Button----->
  </form>
</div>
<?php
    }
  }
?>
<!--Body of Form ends--->
</body>
</html>
