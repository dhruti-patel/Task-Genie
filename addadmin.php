<?php 
session_start();
$f_name = "";
$l_name = "";
$city = "";
$email= "";
$mobileno=0;
$psw = "";
$pswrepeat = "";
$errors = array();

$db = mysqli_connect('localhost', 'root', '', 'task_genie');

if(!isset($_SESSION['adminid'])) {
header('location: tglogin.php');
exit;
}

if (isset($_POST['add_admin'])) 
{
  
  $f_name = mysqli_real_escape_string($db, $_POST['f_name']);
  $l_name = mysqli_real_escape_string($db, $_POST['l_name']);
  $city = mysqli_real_escape_string($db, $_POST['city']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $psw = mysqli_real_escape_string($db, $_POST['psw']);
  $pswrepeat = mysqli_real_escape_string($db, $_POST['pswrepeat']);
  $mobileno = mysqli_real_escape_string($db, $_POST['mobileno']);
  $city = mysqli_real_escape_string($db, $_POST['city']);

   if ($psw != $pswrepeat) {
	array_push($errors, "The two passwords do not match");
  }
  
   $user_check_query = "SELECT * FROM admin WHERE email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
    if ($user) {
    

    if ($user['email'] === $email) {
     array_push($errors, "email already exists"); 
    }
	}
	
	  if (count($errors) == 0) {
  	$psw = md5($psw);//encrypt the password before saving in the database

  	$query = "INSERT INTO admin(username,f_name,l_name,email,mobileno,city)VALUES('$email','$f_name','$l_name','$email','$mobileno','$city')";
	$query1 = "INSERT INTO account(u_id,username,password ) 
  			  VALUES(1,'$email','$psw')";
  	mysqli_query($db, $query);
	mysqli_query($db, $query1);
	
	
  	
  
  }
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
  <a href="tgadmin.php">Home</a>
  <a href="addhelper.php">Add Helper</a>
  <a href="removehelper.php">Remove Helper</a>
  <a class="active" href="addadmin.php">Add Admin</a>
  <a href="removeadmin.php">Remove Admin</a>
  <a href="viewbookings.php">Bookings</a>
    <a href="logout.php">Logout</a>
</div>

<div class="content">
<h1 style="color:#29bfca"><b>Add Admin</b></h1>
    <p>Please fill the details of admin recruited by the recruitment staff.</p>
    <hr>
<form name="addadminform" method="post" action="addadmin.php">
<label for="fname"><b>First Name</b></label>
    <input type="text" class="info" placeholder="Enter First Name" name="f_name" required>
	
	<label for="lname"><b>Last Name </b></label>
    <input type="text" class="info" placeholder="Enter Last Name " name="l_name" required>
	
	    <label for="email"><b>Email</b></label>
    <input type="email" class="info" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" class="info" placeholder="Enter Password" name="psw" autocomplete="new-password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>

    <label for="psw-repeat"><b>Confirm Password</b></label>
    <input type="password" class="info" placeholder="Confirm Password" name="pswrepeat" autocomplete="new-password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
	
	<label for="mobileno"><b>Mobile No.</b></label>
    <input type="tel" class="info" placeholder="Enter Mobile No." name="mobileno" pattern="^\d{10}$" required>
	
	
	<label for="city"><b>City</b></label>
	
  <select id="city" name="city" class="info" required>
    <option value="mumbai">Mumbai<option>
    <option value="pune">Pune</option>
    <option value="banglore">Banglore</option>
    <option value="hyderabad">Hyderabad</option>
    <option value="ahemdabad">Ahemdabad</option>
	<option value="delhi">Delhi</option>
  </select>
  

  
    <hr>
	<button type="submit" class="addhelperbtn" name="add_admin"><b>Add Admin</b></button>
</form>
</div>

</body>
</html>
