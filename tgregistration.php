<?php 

session_start();


// initializing variables
$username = "";
$f_name = "";
$l_name = "";
$email = "";
$psw = "";
$pswrepeat = "";
$mobileno=0;
$city1= "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'task_genie');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $f_name = mysqli_real_escape_string($db, $_POST['f_name']);
  $l_name = mysqli_real_escape_string($db, $_POST['l_name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $psw = mysqli_real_escape_string($db, $_POST['psw']);
  $pswrepeat = mysqli_real_escape_string($db, $_POST['pswrepeat']);
  $mobileno = mysqli_real_escape_string($db, $_POST['mobileno']);
  $city1 = mysqli_real_escape_string($db, $_POST['city1']);

 
  
  if ($psw != $pswrepeat) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM customer WHERE email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    

    if ($user['email'] === $email) {
     array_push($errors, "email already exists"); 
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$psw = md5($psw);//encrypt the password before saving in the database

  	$query = "INSERT INTO customer(username,f_name,l_name,email,mobile_no,city)VALUES('$email','$f_name','$l_name','$email','$mobileno','$city1')";
	$query1 = "INSERT INTO account (u_id,username,password ) 
  			  VALUES(2,'$email','$psw')";
  	mysqli_query($db, $query);
	mysqli_query($db, $query1);
	header('location: tglogin.php');
	
  	
  
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
<link rel="stylesheet" href="csscode/tgregistrationcss.css">
<script type="text/javascript" src="jscode/slideshow.js"></script>
</head>

<style>
  body {background-color: white;}
  h1 {color: black;}
  p {color: black;}
</style>
<body>
<div class="back">
<a href="tghome.php" ><button class="backhome">Back</button></a>
</div>

<div class="container">

    <h1 style="color:#29bfca"><b>Registration</b></h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

	
	<form name="regform" method="post" action="tgregistration.php"  >
	
	<?php  if (count($errors) > 0) : ?>
  <div class="error">
  	<?php foreach ($errors as $error) : ?>
  	  <p><?php echo $error ?></p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>

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
    <input type="tel" class="info" placeholder="Enter Mobile No." name="mobileno"  required pattern="[0-9]{10}">
	
	<label for="city1"><b>City</b></label>
			<select id="city1" name="city1" class="info" required>
			<option value="mumbai">Mumbai</option>
			<option value="pune">Pune</option>
			<option value="banglore">Bengaluru</option>
			<option value="hyderabad">Hyderabad</option>
			<option value="ahemdabad">Ahemdabad</option>
			<option value="delhi">Delhi</option>
			</select>
    <hr>

    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <button type="submit" class="registerbtn" name="reg_user"><b>Create Account</b></button>
  </div>

  <div class="container signin">
    <p>Already have an account? <a href="tglogin.php">Login</a>.</p>
  </div>
</form>

</body>
</html>