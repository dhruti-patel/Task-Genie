<?php   
 $db = mysqli_connect('localhost', 'root', '', 'task_genie');
$delemail=$_GET['del'];  
$delete_query="delete from admin WHERE email='$delemail'";//delete query  
$res=mysqli_query($db,$delete_query);

$delete_query1="delete from account WHERE username='$delemail'";

$run=mysqli_query($db,$delete_query1);  
if($run)  
{  
header("Location: removeadmin.php"); 
}  
  
?> 




