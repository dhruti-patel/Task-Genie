<?php 
session_start();
$f_name = "";
$l_name = "";
$city = "";
$skill=0;
$mobileno=0;
$age=0;

$db = mysqli_connect('localhost', 'root', '', 'task_genie');

if(!isset($_SESSION['adminid'])) {
header('location: tglogin.php');
exit;
}

if (isset($_POST['add_helper'])) 
{
  
  $f_name = mysqli_real_escape_string($db, $_POST['f_name']);
  $l_name = mysqli_real_escape_string($db, $_POST['l_name']);
  $city = mysqli_real_escape_string($db, $_POST['city']);
  $skill = mysqli_real_escape_string($db, $_POST['skill']);
  $mobileno = mysqli_real_escape_string($db, $_POST['mobileno']);
  $age = mysqli_real_escape_string($db, $_POST['age']);

 
 $query = "INSERT INTO helper( f_name, l_name, skill_id, mobile_no, age, city ) 
  			  VALUES('$f_name','$l_name', '$skill','$mobileno', '$age', '$city')";
	
  	$res=mysqli_query($db,$query);
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
  <a class="active" href="addhelper.php">Add Helper</a>
  <a href="removehelper.php">Remove Helper</a>
    <a href="addadmin.php">Add Admin</a>
  <a href="removeadmin.php">Remove Admin</a>
   <a href="viewbookings.php">Bookings</a>
    <a href="logout.php">Logout</a>
</div>

<div class="content">
<h1 style="color:#29bfca"><b>Add Helper</b></h1>
    <p>Please fill the details of helper recruited by the recruitment staff.</p>
    <hr>
<form name="addhelperform" method="post" action="addhelper.php">
<label for="fname"><b>First Name</b></label>
    <input type="text" class="info" placeholder="Enter First Name" name="f_name" required>
	
	<label for="lname"><b>Last Name </b></label>
    <input type="text" class="info" placeholder="Enter Last Name " name="l_name" required>
	
	<label for="mobileno"><b>Mobile No.</b></label>
    <input type="tel" class="info" placeholder="Enter Mobile No." name="mobileno" pattern="^\d{10}$" required>
	
	<label for="age"><b>Age</b></label>
    <input type="number" class="info" placeholder="Limit between 18 to 50" name="age" min="18" max="50" required>
	
	<label for="city"><b>City</b></label>
	
  <select id="cities" name="city" class="info" required>
    <option value="mumbai">Mumbai<option>
    <option value="pune">Pune</option>
    <option value="banglore">Banglore</option>
    <option value="hyderabad">Hyderabad</option>
    <option value="ahemdabad">Ahemdabad</option>
	<option value="delhi">Delhi</option>
  </select>
  
  <label for="skill"><b>Skill</b></label>
	
  <select id="skills" name="skill" class="info" required>
    <option value="1">Cleaner</option>
    <option value="2">Repairer</option>
<option value="3">Pest Controller</option>
<option value="4">Spa</option>
    <option value="5">Beautician</option>
    
  </select>
  
    <hr>
	<button type="submit" class="addhelperbtn" name="add_helper"><b>Add Helper</b></button>
</form>
</div>

</body>
</html>
