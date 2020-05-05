<?php


session_start();
function isLoggedIn()
{
	if (isset($_SESSION['userid'])) {
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
<a class="active" href="tgcustomer.php">Home</a>
  <a href="tgdash.php">Book a Service</a>
  <a href="mybookings.php">My Bookings</a>
  <a href="tgcancelbooking.php">Cancel Booking</a>
    <a href="tgfeedback.php">Provide Feedback</a>
    <a href="logout.php">Logout</a>
</div>


<div class="content">

  WELCOME TO THE CUSTOMER PAGE
</div>

</body>
</html>