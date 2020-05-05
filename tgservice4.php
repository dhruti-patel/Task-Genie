<?php
session_start(); // starts the session
$_SESSION['url'] = $_SERVER['REQUEST_URI'];

?>
<!DOCTYPE html>
<html>
<head>
<title>Task Genie</title>
<link rel="icon" 
      type="image/png" 
      href="images/tgicon.png">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">-->
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="csscode/tgservicecss.css">
<script type="text/javascript" src="jscode/slideshow.js"></script>
</head>




<body>

<div>
<nav class="navbar">
  	<div class="header">
		<img style="display: inline;" src="images/tglogo.png" alt="logo" />
	  </div>
    </div>
</nav>
</div>
<div class="container-fluid">
  
  <div class="row">
    <div class="col-sm-6" align="center">
      <img class="icon img1" src="images/ac.jpg" alt="Generic placeholder image" width="500" height="250"></br>
    </div>
    <div class="col-sm-6">
     <p class="text-justify col">Your expensive AC needs regular care and servicing or repairing to ensure it is at its optimum best! 
	 At Task Genie, you can avail of convenient, quick and easy repair services for your AC, no matter the day or time! 
	 Our range of services include complete repair, installation of a new AC and even regular servicing of all brands. 
	 Don't worry anymore when your precious AC starts making those funny noises or if it seems to have stopped cooling like the way it once used to. 
	 Get the home service specialists to help out instead!</p></div>
  </div>
  </div>
  
  
  
  <fieldset>
  <legend style="color:#29bfca"><b><br><br>AC REPAIRS</b></legend>
 <div class="container-fluid space"> 
   <div class="row">
<div class="col-sm-6" style="margin-top:50px;">
        <p class="p1" align="center" style="color:#29bfca"><b>WHAT WE'LL DO</b></p>
		
<p class="p2"><b>Dry Service Includes :</b></p>
<ul>
<li>Cleaning of fan coil</li>
<li>Filter cleaning</li>
<li>Clearing of drainage pipe</li>
<li>Checking of gas level</li>

</ul> 

<p class="p2"><b>Wet Service Includes :</b></p>
<ul>
<li>Cleaning of coil, filter with water</li>
<li>Clearing of drainage pipe</li>
<li>Checking of gas level</li>

</ul> 

<p class="p2"><b>Note :</b></p>
<ul>
<li>Parts replacement, material cost, gas charging, transportation cost (if applicable)<br> would be on actual and are to be settled with the service partner</li>
<li>Inspection charge if any, would be adjusted against the final bill</li>
<li>Customer to provide for stool/ladder, water and electrical connection</li>
</ul>


</div>
   <div class="col-sm-6 borderspace" align="center">
     <form action="tgcheck.php" method="POST">
	
  
    
	
	 <label for="bhk">Quantity :</label>
  
	 <select id="bhk" name="bhksize" class="info" required>
      <option value="AC1">1</option>
      <option value="AC2">2</option>
      <option value="AC3">3</option>
	  <option value="AC4">4</option>
      <option value="AC5">5</option>
    </select>
	
	
	
	<label for="fname">Pick a date :</label>
	<input id="datepicker" onchange="checkDate()" required class="datepicker-input info" type="date" name="bday" data-date-format="yyyy-mm-dd" >
	<script type="text/javascript">

function checkDate() 
{ 
var selectedText = document.getElementById('datepicker').value; 
var selectedDate = new Date(selectedText); 
var now = new Date(); 
if (selectedDate < now) 
{ 
alert("Please select appropriate date "); 
} 
}

</script>
	
	<label for="bhk">Select Time :</label>
    <select id="bhk" name="btime" class="info" required>
      <option value="12:00 PM">12 PM</option>
      <option value="01:00 PM">1 PM</option>
      <option value="02:00 PM">2 PM</option>
      <option value="03:00 PM">3 PM</option>
	  <option value="04:00 PM">4 PM</option>
      <option value="05:00 PM">5 PM</option>
      <option value="06:00 PM">6 PM</option>
    </select>
	

    <label for="subject">Additional Comments :</label>
    <textarea id="com" name="comm" placeholder='Write Something..' style="height:200px" class="info"></textarea>

    <input type="submit" value="PROCEED" class="btn" name="book">
  </form>
    </div>
  </div>   
  
    
</div>
  

  
    
</div>
    
	
	
  
    
</div>
</fieldset>

    
  

</body>

</html>