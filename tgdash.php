<?php
	session_start();
		if(!isset($_SESSION['userid'])) {
		

 header('location:tglogin.php');

 exit;
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
<link rel="stylesheet" href="csscode/tghomecss.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script type="text/javascript" src="jscode/slideshow.js"></script>



<script>
  $(document).ready(function(){
	  
	  var commentCount = 2;
	  $("button").click(function() {
		  
		  commentCount = commentCount + 2;
		  $("#comments").load("load-comments.php", {
			 commentNewCount: commentCount
		  });
		  
	  });
	  
  });
</script>


</head>

<style>
  body {background-color: white;}
  h1 {color: black;}
  p {color: black;}
</style>

<body>
<div>
<nav class="navbar">
  	<div class="header">
		<img style="display: inline;" src="images/tglogo.png" alt="logo" />
		<a href="tgcustomer.php"> <i class="material-icons">&#xe7fd;</i> <?php echo $_SESSION['user_name']; ?></a>
		<div id="searchnav">
		<form action="tgsearch.php" method="GET" >
        <input type="text" placeholder="Search" name="search">
      <button type="submit" class="btn btn-default">Submit</button>
	  </form>
	  </div>
    </div>
</nav>
</div>

<div class="service">
<div class="row">
  <div class="col-sm-3" align="center">
  <img class="icon" src="images/cleaner.png" alt="Generic placeholder image" width="140" height="140"></br>
  <div class="dropdown">
  <a>CLEANING</a>
  <div class="dropdown-content">
    <a href="tgservice1.php">House</a>
    <a href="tgservice2.php">Office</a>
    <a href="tgservice3.php">Kitchen</a>
  </div>
</div>

  </div>
  <div class="col-sm-3" align="center">
  <img class="icon" src="images/home-repair.png" alt="Generic placeholder image" width="140" height="140"></br>
   <div class="dropdown">
  <a>REPAIRS</a>
  <div class="dropdown-content">
    <a href="tgservice4.php">AC</a>
    <a href="tgservice5.php">Computer</a>
    <a href="tgservice6.php">Microwave</a>
  </div>
</div>

  </div>
  <div class="col-sm-3" align="center">
  <img class="icon" src="images/pesticon.png" alt="Generic placeholder image" width="140" height="140"></br>
 <div class="dropdown">
  <a>PEST CONTROL</a>
  <div class="dropdown-content">
    <a href="tgservice7.php">General</a>
   
  </div>
</div>

  </div>
  <div class="col-sm-3" align="center">
  <img class="icon" src="images/face-mask.png" alt="Generic placeholder image" width="140" height="140"></br>
<div class="dropdown">
  <a>BEAUTY AND SPA</a>
  <div class="dropdown-content">
    <a href="tgservice8.php">Regular Waxing</a>
    <a href="tgservice9.php">Hairstyling and Makeup</a>
	 <a href="tgservice10.php">Packages</a>
  </div>
</div>
  </div>
</div>
</div>

<div class="midsearch">
<form action="tgsearch.php" method="GET">
<input type="text" placeholder="  Search Service.." maxlength="20" id="search" name="search">
<input type="submit" value="GO" id="submit">
</form>
</div>

<div class="workup">
<h1 align="center"> <b>How It Works</b></h2></br>
<div class="row">
<div class="col-sm-4" align="center"> <p class="head2"><b>BOOK</b></p><p class="inside"  >From wide range of services</p></div>
<div class="col-sm-4" align="center"> <p class="head2"><b>PAY</b></p><p class="inside" >Before the service is done</p></div>
<div class="col-sm-4" align="center"> <p class="head2"><b>RELAX</b></p><p class="inside" >While the service is done</p></div>
 </div>
 </div>
 



 <div class="locations">
<h1 align="center" style="color:#29bfca" > <b><i class="fa fa-map-marker" style="font-size:48px;color:red"></i>&nbsp;&nbsp;Our Locations</b></h2></br>
<div class="row">
<div class="col-sm-2" align="center"> <p class="head2"><b>MUMBAI</b></p></div>
<div class="col-sm-2" align="center"> <p class="head2"><b>PUNE</b></p></div>
<div class="col-sm-2" align="center"> <p class="head2"><b>BENGALURU</b></p></div>
<div class="col-sm-2" align="center"> <p class="head2"><b>HYDERABAD</b></p></div>
<div class="col-sm-2" align="center"> <p class="head2"><b>AHEMDABAD</b></p></div>
<div class="col-sm-2" align="center"> <p class="head2"><b>DELHI</b></p></div>
 </div>
 </div>
 
 

<div id="comments" class="locations">
<h1 align="center" style="color:#29bfca" > <b><i class="fa fa-quote-left" aria-hidden="true" style="font-size:48px;color:red"></i>&nbsp;&nbsp;Testimonials</b></h2></br>

<?php


$servername = "localhost";
$username = "root";
$password = " ";
$dbname = "task_genie";

$conn = mysqli_connect($servername,$username,$password,$dbname);

$sql1 = "SELECT * FROM feedback ORDER BY feedid DESC LIMIT 2";
$result1 = mysqli_query($conn, $sql1);


if(mysqli_num_rows($result1) > 0){
	while($row = mysqli_fetch_assoc($result1)){
		echo "<p>";
		echo $row['cust_name'];
		echo "<br>";
		echo $row['servicename'];
		echo "<br>";
		echo $row['stars'];
		echo "<br>";
		echo $row['comment'];
		echo "</p>";
		
	}
	
}
else{
	
	echo "There are no comments !";
}

?>


 </div>
 
 <button class="btn">Show More Comments</button>
 
 

</body>
</html>