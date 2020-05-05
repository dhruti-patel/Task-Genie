<?php   
 $db = mysqli_connect('localhost', 'root', '', 'task_genie');
$delete_id=$_GET['del'];  
$delete_query="delete  from helper WHERE h_id='$delete_id'";//delete query  
$run=mysqli_query($db,$delete_query);  
if($run)  
{  
header("Location: removehelper.php"); 
}  
  
?>  