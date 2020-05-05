
<html>  
<head lang="en">  
    <meta charset="UTF-8">  
	<link rel="stylesheet" href="csscode/admincss.css">
	<link rel="stylesheet" href="csscode/checkboxcss.css">
    <link type="text/css" rel="stylesheet" href="css\bootstrap.min.css"> <!--css file link in bootstrap folder-->  
    <title>Task Genie</title>
<link rel="icon" 
      type="image/png" 
      href="images/tgicon.png">
</head>  
<style>  
    .login-panel {  
        margin-top: 150px;  
    }  
    .table {  
        margin-top: 50px;  
  
    }  
  
</style>  
  
<body>
<div class="sidebar">
 <a href="tgcustomer.php">Home</a>
  <a href="tgdash.php">Book a Service</a>
  <a class="active" href="mybookings.php">My Bookings</a>
  <a href="tgcancelbooking.php">Cancel Booking</a>
    <a href="logout.php">Logout</a>
</div> 

<style>
.sidebar a{
	text-decoration: none;
}
</style>

<div class="content"> 
  
<div class="table-scrol">  
    <h1 style="color:#29bfca"><b>My Bookings</b></h1>
  
<div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->  
  
  
    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">  
        <thead>  
  
        <tr>  

            <th>Service</th>   
            <th>Date</th>  
            <th>Time</th> 
		

           			
            
        </tr>  
        </thead>  
          <?php  
		session_start();
		if(!isset($_SESSION['userid'])) {



 // send them whereever you want

 header('location:tglogin.php');

 exit;



}
        $db = mysqli_connect('localhost', 'root', '', 'task_genie');
        $cid ="select c_id from customer where username='".$_SESSION['userid']."'";
 $resultcid =mysqli_query($db,$cid);
 


$row1 = mysqli_fetch_assoc($resultcid);
$id = intval($row1['c_id']);
		
		
        $view_users_query="select b.b_id ,s.service_name,b.date,b.time from service s,booking b where b.s_id=s.s_id and b.c_id=$id"; 		
         $run=mysqli_query($db,$view_users_query);
        
		
		while($row=mysqli_fetch_array($run))
        {  
		    $b_id=$row[0];
            $service_name=$row[1];  
			$bdate=$row[2];
            $btime=$row[3];  
            
	 
  
  
  
        ?>  
  
        <tr>  

            
	
<td><?php echo $service_name;  ?></td> 
<td><?php echo $bdate;  ?></td> 			
<td><?php echo $btime;  ?></td>  
           
        </tr>  
  
        <?php } 
		
		?>  
 
 
 
 
 
 
 
  
    </table>  
        </div>  
</div> 
</div> 
  
  
</body>  
  
</html>  