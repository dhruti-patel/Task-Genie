<?php 
session_start();
if(!isset($_SESSION['userid'])) {
header('location:tglogin.php');
exit;
}

$fullname = "";
$flatno = "";
$street = "";
$landmark = "";
$city1 = "";
$state = "";
$zip = "";
$cardname = "";
$cardno = "";
$cvv = "";

$db = mysqli_connect('localhost', 'root', '', 'task_genie');

if (isset($_POST['add_booking'])) 
{
  
  $fullname = mysqli_real_escape_string($db, $_POST['fullname']);
  $flatno = mysqli_real_escape_string($db, $_POST['flatno']);
  $street = mysqli_real_escape_string($db, $_POST['street']);
  $landmark = mysqli_real_escape_string($db, $_POST['landmark']);
  $city1 = mysqli_real_escape_string($db, $_POST['city1']);
  
  $zip = mysqli_real_escape_string($db, $_POST['zip']);
  $cardname = mysqli_real_escape_string($db, $_POST['cardname']);
  $cardno = mysqli_real_escape_string($db, $_POST['cardno']);
  $cvv = mysqli_real_escape_string($db, $_POST['cvv']);

 
 $cid ="select c_id from customer where username='".$_SESSION['userid']."'";
 $resultcid =mysqli_query($db,$cid);
 
$row1 = mysqli_fetch_assoc($resultcid);
$id = intval($row1['c_id']);
$_SESSION['cid1']=$id;
 
$query = "insert into booking(fullname , date , time , flatno , street , city , landmark , zip , comments , s_id , c_id)values('$fullname','".$_SESSION['bday']."','".$_SESSION['btime']."','$flatno','$street','$city1','$landmark','$zip','".$_SESSION['comm']."','".$_SESSION['bhk']."',$id)";


if (mysqli_query($db, $query)) {
    $bid = mysqli_insert_id($db);
   
} 

$query1 = "insert into payment(tamount , cardname , cardno , cvv , b_id)values('".$_SESSION['payment']."','$cardname','$cardno','$cvv',$bid)";
 
$res=mysqli_query($db,$query1);
 
 
header('location: tgcustomer.php');	
  
  }	
?>


<!DOCTYPE html>
<html>
<head>
<title>Task Genie</title>
<link rel="icon" 
      type="image/png" 
      href="images/tgicon.png">


<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="csscode/tgpaymentcss.css">


</head>
<body>


    <div class="container">
      <form name="addbookingform" method="post" action="tgpayment.php" style="margin:0 auto ;text-align:left">
      
  
          
            <h3>Billing Address</h3>
			<label for="pay"><i class="fa fa-user"></i> Amount</label>
            <input type="text" name="pay" class="info" value="<?php echo $_SESSION["payment"] ; ?>" disabled>
			
			<label for="helper"><i class="fa fa-user"></i> No. of Helpers</label>
            <input type="text" name="helper" class="info" value="<?php echo $_SESSION["helpers"] ; ?>" disabled>
			
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
			<input type="text" class="info" placeholder="Abhishek Mehra" name="fullname" required>
            
			<label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" name="email" class="info" value ="<?php echo $_SESSION["userid"] ; ?>" disabled>
            
			<label for="adr"><i class="fa fa-address-card-o"></i> Flat no.</label>
            <input type="text" name="flatno" class="info" placeholder="A 201" required>
			
			<label for="adr"><i class="fa fa-address-card-o"></i> Street</label>
            <input type="text" name="street" class="info" placeholder="Andrew's Road" required>
			
			<label for="adr"><i class="fa fa-address-card-o"></i> Landmark</label>
            <input type="text" name="landmark" class="info" placeholder="Opp. DMart">
            
			<label for="city"><i class="fa fa-institution"></i> City</label>
            <select id="cities" name="city1" class="info" required>
			<option value="mumbai">Mumbai<option>
			<option value="pune">Pune</option>
			<option value="banglore">Bengaluru</option>
			<option value="hyderabad">Hyderabad</option>
			<option value="ahemdabad">Ahemdabad</option>
			<option value="delhi">Delhi</option>
			</select>
  
  
            <div class="row">
              
			  
              <div class="col-50">
                <label for="zip"> Zip</label>
                <input type="text" name="zip" class="info" placeholder="10000" required pattern="[0-9]{6}">
              </div>
            </div>
         

         
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
			
            <label for="cname">Name on Card</label>
            <input type="text" name="cardname" class="info" placeholder="John More Doe" required>
            <label for="ccnum">Credit card number</label>
            <input type="text" name="cardno" class="info" placeholder="1111222233334444" required pattern="[0-9]{16}">
            
			
			
            
			<div class="row">
             
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" name="cvv" class="info" placeholder="352" required pattern="[0-9]{3}">
              </div>
            </div>
         
          

       
        
		<input type="submit" class="btn" name="add_booking" value="MAKE PAYMENT">
	
      </form>
	  
	 
	  
    </div>
  



</body>
</html>

