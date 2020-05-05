<?php
session_start();
function isLoggedIn()
{
	if (isset($_SESSION['adminid'])) {
		return true;
	}else{
		return false;
	}
}
if (!isLoggedIn()) {
	
	header('location: tglogin.php');
	
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Task Genie</title>
<link rel="icon" 
      type="image/png" 
      href="images/tgicon.png">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">-->
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="csscode/admincss.css">

</head>

<style>
  body {background-color: white;}
  h1 {color: black;}
  p {color: black;}
</style>
<body>

<div class="sidebar">
  <a class="active" href="tgadmin.php">Home</a>
  <a href="addhelper.php">Add Helper</a>
  <a href="removehelper.php">Remove Helper</a>
    <a href="addadmin.php">Add Admin</a>
  <a href="removeadmin.php">Remove Admin</a>
   <a href="viewbookings.php">Bookings</a>
    <a href="logout.php">Logout</a>
</div>

<div class="content">
WELCOME TO THE ADMIN PAGE
</div>

</body>
</html>