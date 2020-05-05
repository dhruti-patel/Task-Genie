<?php   
 $db = mysqli_connect('localhost', 'root', '', 'task_genie');
$delete_id=$_GET['del'];  
$delete_query="delete from payment WHERE b_id='$delete_id'";//delete query  
$res=mysqli_query($db,$delete_query);

$delete_query1="delete from booking WHERE b_id='$delete_id'";

$run=mysqli_query($db,$delete_query1);  
if($run)  
{  
header("Location: tgcancelbooking.php"); 
}  
  
?> 




