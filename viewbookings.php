<html>  
<head lang="en">  
    <meta charset="UTF-8">  
	<link rel="stylesheet" href="csscode/admincss.css">
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
  <a href="tgadmin.php">Home</a>
  <a href="addhelper.php">Add Helper</a>
  <a href="removehelper.php">Remove Helper</a>
      <a href="addadmin.php">Add Admin</a>
  <a href="removeadmin.php">Remove Admin</a>
   <a class="active" href="viewbookings.php">Bookings</a>
  <a href="logout.php">Logout</a>
</div> 

<style>
.sidebar a{
	text-decoration: none;
}
</style>

<div class="content"> 
  
<div class="table-scrol">  
    <h1 style="color:#29bfca"><b>Bookings</b></h1>
  
<div class="table-responsive">
  
  
    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">  
        <thead>  
  
        <tr>  
            <th>Name</th> 
            <th>Service</th>  
			<th>Date</th> 
            <th>Time</th>  
            <th>Flat No.</th>
            <th>Street</th> 
            <th>Landmark</th> 			
            <th>City</th>  
			<th>Pin code</th> 
            <th>Comments</th>			

        </tr>  
        </thead>  
  
        <?php  
		session_start();
		if(!isset($_SESSION['adminid'])) {



 // send them whereever you want

 header('location:tglogin.php');

 exit;



}
        $db = mysqli_connect('localhost', 'root', '', 'task_genie');
        
		
		
        $view_users_query="select c.f_name,c.l_name,s.service_name,b.date,b.time,b.flatno,b.street,b.landmark,b.city,b.zip,b.comments from customer c, service s , booking b where b.c_id=c.c_id and b.s_id=s.s_id"; 		
         $run=mysqli_query($db,$view_users_query);

		
		while($row=mysqli_fetch_array($run))
        {  
		    $fname=$row[0];
			$lname=$row[1];
            $sname=$row[2];  
			$date=$row[3];
            $time=$row[4];  
             $flatno=$row[5];  
			$street=$row[6];
			    $landmark=$row[7];
				$city=$row[8];
				$zip=$row[9];
				$comm=$row[10];
		
	 
  
  
  
        ?>  
  
        <tr>  

            
<td><?php echo $fname." ".$lname;  ?></td> 	
<td><?php echo $sname;  ?></td> 
<td><?php echo $date;  ?></td> 			
<td><?php echo $time;  ?></td>  
<td><?php echo $flatno;  ?></td>  
 <td><?php echo $street;  ?></td> 
  <td><?php echo $landmark;  ?></td>
<td><?php echo $city;  ?></td> 
<td><?php echo $zip;  ?></td>   
<td><?php echo $comm;  ?></td> 
          
        </tr>  
  
        <?php } 
		?>  
  
    </table>  
        </div>  
</div> 
</div> 
  
  
</body>  
  
</html>  