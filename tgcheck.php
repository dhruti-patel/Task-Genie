<?php 
session_start();
$db = mysqli_connect('localhost', 'root', '', 'task_genie');
$user="";
function isLoggedIn()
{
	if (isset($_SESSION['userid'])) {
		$user=$_SESSION['userid'];
		return true;
		
	}else{
		return false;
	}
}
  
$bhksize ="";
$bday ="";
$btime ="";
$errors = array();
$comm ="";

if (isset($_POST['book'])) {

$bhksize = mysqli_real_escape_string($db, $_POST['bhksize']);
$_SESSION['bhk']=$bhksize;
$bday = mysqli_real_escape_string($db, $_POST['bday']);
$_SESSION['bday']=$bday;
$btime = mysqli_real_escape_string($db, $_POST['btime']);
$_SESSION['btime']=$btime;
$comm = mysqli_real_escape_string($db, $_POST['comm']);
$_SESSION['comm']=$comm;
$option = $_POST['bhksize'];

   
if (count($errors) == 0) {
	  
	 
	  
	  $query = "SELECT charge,nhelpers FROM service WHERE s_id='$option'";
  	  
	  
	$results = mysqli_query($db, $query);
   
	
	$row = mysqli_fetch_assoc($results);
	
		


		$payment=$row["charge"];
       $helpers=$row["nhelpers"];
	

if (!isLoggedIn()) {
	
	header('location: tglogin.php');
	
}

else{
	
	
  	
			$_SESSION['payment'] = $payment;
			$_SESSION['helpers'] = $helpers;
		
			
			
		
		header("location: tgpayment.php");
			
		}
	
  }
	
}




?>


