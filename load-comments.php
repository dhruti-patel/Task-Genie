<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "task_genie";

$conn = mysqli_connect($servername,$username,$password,$dbname);


$commentNewCount = $_POST['commentNewCount'];
 
$sql1 = "SELECT * FROM feedback ORDER BY feedid DESC LIMIT $commentNewCount";
$result1 = mysqli_query($conn, $sql1);


if(mysqli_num_rows($result1) > 0){
	while($row = mysqli_fetch_assoc($result1)){
		
		echo "<center><label>Customer Name :</label>&nbsp;&nbsp;&nbsp;";
		echo $row['cust_name'];
		echo "<br>";
		echo "<label>Service Name :</label>&nbsp;&nbsp;&nbsp;";
		echo $row['servicename'];
		echo "<br>";
		echo "<label>Ratings :</label>&nbsp;&nbsp;&nbsp;";
		echo $row['stars'];
		echo "<br>";
		echo "<label>Comments :</label>&nbsp;&nbsp;&nbsp;";
		echo $row['comment'];
		echo "<br><br>";
		
	}
	
}
else{
	
	echo "There are no comments !";
}

?>
