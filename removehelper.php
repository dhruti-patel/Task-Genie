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
  <a class="active" href="removehelper.php">Remove Helper</a>
    <a href="addadmin.php">Add Admin</a>
  <a href="removeadmin.php">Remove Admin</a>
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
    <h1 style="color:#29bfca"><b>Remove Helper</b></h1>
  
<div class="table-responsive">
  
  
    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">  
        <thead>  
  
        <tr>  
         
            <th>First Name</th>  
			<th>Last Name</th> 
            <th>Age</th>  
            <th>City</th>
            <th>SkillID</th> 
            <th>Skill</th> 			
            <th>Delete Helper</th>  
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
        
		
		
        $view_users_query="select h.h_id,h.f_name,h.l_name,h.age,h.city,h.skill_id,s.skill_name from helper h , skills s where h.skill_id=s.skill_id"; 		
         $run=mysqli_query($db,$view_users_query);
        
		
		while($row=mysqli_fetch_array($run))
        {  
		    $h_id=$row[0];
            $f_name=$row[1];  
			$l_name=$row[2];
            $age=$row[3];  
             $city=$row[4];  
			$skill_id=$row[5];
			    $skill=$row[6];
	 
  
  
  
        ?>  
  
        <tr>  

            

<td><?php echo $f_name;  ?></td> 
<td><?php echo $l_name;  ?></td> 			
<td><?php echo $age;  ?></td>  
<td><?php echo $city;  ?></td>  
 <td><?php echo $skill_id;  ?></td> 
  <td><?php echo $skill;  ?></td> 
            <td><a href="delete.php?del=<?php echo $h_id ?>"><button class="removehelperbtn" >Delete</button></a></td>   
        </tr>  
  
        <?php } ?>  
  
    </table>  
        </div>  
</div> 
</div> 
  
  
</body>  
  
</html>  