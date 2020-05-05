<?php 

session_start();


// initializing variables
$username = "";
$password="";
$user_id=0;
$errors = array();
$uname=" ";

$db = mysqli_connect('localhost', 'root', '', 'task_genie');
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['psw']);

  

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM account WHERE username='$username' AND password='$password'";
	$query1= "SELECT * FROM customer WHERE username='$username'";
  	
	$results = mysqli_query($db, $query);
		$results1 = mysqli_query($db, $query1);
	
	$row = mysqli_fetch_assoc($results);
	$row1 = mysqli_fetch_assoc($results1);
	
		$user_id=$row["u_id"];
		$uname=$row1["f_name"];
	
  	if (mysqli_num_rows($results) != 1)
		{
  	  
  		array_push($errors, "Wrong username or password");
		
  	}
	elseif($user_id == 1)
		{
			$_SESSION['adminid'] = $username;
			header('location: tgadmin.php');
			
		}
		elseif($user_id==2)
{
$_SESSION['user_name'] = $uname;
if(isset($_SESSION['url']))
{	
           $url = $_SESSION['url'];
$_SESSION['userid'] = $username;
header("location: http://localhost$url");
}
else 
{
$url = "tgcustomer.php";//customer profile page
$_SESSION['userid'] = $username;
header("location: http://localhost/htmlfiles/$url");
}
			
		
		
		
		}
	
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
<link rel="stylesheet" href="csscode/tglogincss.css">
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
<form method="post" action="tglogin.php">

<?php  if (count($errors) > 0) : ?>
  <div class="error">
  	<?php foreach ($errors as $error) : ?>
  	  <p><?php echo $error ?></p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>


    <h1 style="color:#29bfca"><b>Login</b></h1>
    <p>Please fill the valid login details.</p>
    <hr>
	
	<label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Email as Username" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
	
	<hr>
	<button type="submit" class="loginbtn" name="login_user" ><b>LOGIN</b></button>
  </div>

  <div class="container login">
    <p>Don't have an account? <a href="tgregistration.php">RegisterNow</a>.</p>
  </div>
</form>
</body>
</html>

