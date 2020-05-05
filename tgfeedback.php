<?php 

session_start();
if(!isset($_SESSION['userid'])) {
header('location:tglogin.php');
exit;
}

// initializing variables

$f_name = "";
$comment = "";
$stars = "";
$servicename = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'task_genie');

// REGISTER USER
if (isset($_POST['feed'])) {
  // receive all input values from the form
  $f_name = mysqli_real_escape_string($db, $_POST['f_name']);
  $comment = mysqli_real_escape_string($db, $_POST['comment']);
  $stars = mysqli_real_escape_string($db, $_POST['stars']);
  $servicename = mysqli_real_escape_string($db, $_POST['servicename']);

  
  $query = "INSERT INTO feedback(cust_name,servicename,stars,comment)VALUES('$f_name','$servicename','$stars','$comment')";
  mysqli_query($db, $query);

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

    <h1 style="color:#29bfca"><b>Customer Feedback</b></h1>
    <p>Please fill in this form to provide your feedback.</p>
    <hr>

	
	<form name="regform" method="post" action="tgfeedback.php"  >
	
	<?php  if (count($errors) > 0) : ?>
  <div class="error">
  	<?php foreach ($errors as $error) : ?>
  	  <p><?php echo $error ?></p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>

	<label for="fname"><b>Full Name</b></label>
    <input type="text" class="info" placeholder="Enter Full Name" name="f_name" required>

	
	<label for="servicename"><b>Service</b></label>
			<select id="servicename" name="servicename" class="info" required>
			<option value="Cleaning">Cleaning</option>
			<option value="Repairs">Repairs</option>
			<option value="Pest Control">Pest Control</option>
			<option value="Beauty and Spa">Beauty and Spa</option>
			</select>
		

	<label for="stars"><b>Ratings</b></label>
			<select id="stars" name="stars" class="info" required>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			</select>
			
	<label for="comments"><b>Feedback</b></label>
	<textarea id="comment" class="info" rows="4" cols="100" placeholder="Provide your feedback here" name="comment" required>
</textarea>
    <hr>

    <p>Thank you for your valuable feedback.</p>
    <button type="submit" class="registerbtn" name="feed"><b>Submit</b></button>
  </div>

</form>

</body>
</html>