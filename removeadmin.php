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
  <a class="active" href="removeadmin.php">Remove Admin</a>
   <a href="viewbookings.php">Bookings</a>
  <a href="logout.php">Logout</a>
</div> 

<style>
.sidebar a{
	text-decoration: none;
}
</style>

<div class="content"> 
  
<div class="table-scrol">  
    <h1 style="color:#29bfca"><b>Remove Admin</b></h1>
  
<div class="table-responsive">
  
  
    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">  
        <thead>  
  
        <tr>  
         
            <th>First Name</th>  
			<th>Last Name</th> 
            <th>Email ID</th>  
            <th>Mobile No.</th> 
			 <th>City</th>
			   <th>Delete Admin</th>  
         
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
        
		
		
        $view_users_query="select a.a_id,a.f_name,a.l_name,a.email,a.mobileno,a.city from admin a"; 		
         $run=mysqli_query($db,$view_users_query);
        
		
		while($row=mysqli_fetch_array($run))
        {  
		    $a_id=$row[0];
            $f_name=$row[1];  
			$l_name=$row[2];
            $email=$row[3];  
             $mobileno=$row[4];  
			$city=$row[5];
			    
	 
  
  
  
        ?>  
  
        <tr>  

            

<td><?php echo $f_name;  ?></td> 
<td><?php echo $l_name;  ?></td> 			
<td><?php echo $email;  ?></td>  
<td><?php echo $mobileno;  ?></td>  
 <td><?php echo $city;  ?></td> 
 
            <td><a href="deleteadmin.php?del=<?php echo $email ?>"><button class="removehelperbtn" >Delete</button></a></td>   
        </tr>  
  
        <?php } ?>  
  
    </table>  
        </div>  
</div> 
</div> 
  
  
</body>  
  
</html>  