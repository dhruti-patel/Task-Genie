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
      <img class="icon img1" src="images/laptop.jpg" alt="Generic placeholder image" width="500" height="250"></br>
    </div>
    <div class="col-sm-6">
     <p class="text-justify col">We know your laptop or desktop is very important to you! 
	 But what happens when the system starts malfunctioning? Be it a funny noise coming from inside or sudden problems with the keyboard; 
	 our door-step experts can come to the rescue. Book a service for anywhere and ensure that your laptop or desktop is quickly and conveniently 
	 repaired without causing anymore stress. Save your precious personal equipment because, everything broken or everything that malfunctions, can be repaired!</p></div>
  </div>
  </div>
  
  
 
  <fieldset>
  <legend style="color:#29bfca"><b><br><br>COMPUTER REPAIRS</b></legend>
 <div class="container-fluid space"> 
   <div class="row">
<div class="col-sm-6" style="margin-top:50px;">
        <p class="p1" align="center" style="color:#29bfca"><b>WHAT WE'LL DO</b></p>

<br><br><p><b>If you are unsure about the problem you may select Inspection</b></p>
		
<br><p class="p2"><b>Service Includes :</b></p>
<ul>
<li>Serviced by trained and certified technicians</li>
<li>Convenience at your doorstep</li>
</ul> 

<p class="p2"><b>Note :</b></p>
<ul>
<li>Costs mentioned in the rate card are service costs only</li>
<li>Parts replacement, material cost, gas charging, transportation cost (if applicable)<br> would be on actual and are to be settled with the service partner</li>
<li>Inspection charge if any, would be adjusted against the final bill</li>

</ul>




</div>
   <div class="col-sm-6 borderspace" align="center">
       <form action="tgcheck.php" method="POST">
	
	
  
      <label for="bhk">Select Type :</label>
 ]
	
	<select id="bhk" name="bhksize" class="info" required>
	
      <option value="ISP">Inspection</option>
      <option value="AVI">Anti-Virus Installation</option>
      <option value="OSBK1">OS Formatting without Back-up</option>
	   <option value="OSBK2">OS Formatting with Data Back-up (upto 20 GB)</option>
      <option value="BSW">Basic Software Installation (upto 10 softwares)</option>
      <option value="OSW">Other Software/Application Installation (per software/application)</option>
	   <option value="DH">Desktop Hang (only detection)</option>
      <option value="HDD">Hard Disk Bad Sector (only detection)</option>
      <option value="HEAT">Over Heating Issue (including dusting and servicing from inside)</option>
	   <option value="DAC">Dusting and Cleaning from Inside</option>
      <option value="HW">Installation of Any Hardware (Lan/DVD Writer/SMPS/RAM/Hard Disk)</option>
      <option value="MB">Motherboard Issue Detection (including port issues like USB/HDMI/VGA/LAN)</option>
	   <option value="DISP">No Display Issue</option>
      <option value="PER">Slow Performance Issue (including tune-up)</option>
      <option value="NET">Internet Issue</option>
	   <option value="UP">Upgradation Inspection</option>
      <option value="CLEAN">Complete PC Clean-up</option>

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