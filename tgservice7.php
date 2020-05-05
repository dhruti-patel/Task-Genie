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
      <img class="icon img1" src="images/pest.jpg" alt="Generic placeholder image" width="500" height="250"></br>
    </div>
    <div class="col-sm-6">
     <p class="text-justify col">Task Genie offers comprehensive eco friendly pest control services for your home. So whether you are looking for bed bugs treatment, 
	 general pest control, rodent control, cockroach pest control or termites control, our agents will exterminate the pests safely and effectively. 
	 Get the best pest control deals for pest control at home, pest control treatment in buildings, pest control for corporates all on our super website.</p></div>
  </div>
  </div>
  
  
 
  <fieldset>
  <legend style="color:#29bfca"><b><br><br>GENERAL PEST CONTROL</b></legend>
 <div class="container-fluid space"> 
   <div class="row">
<div class="col-sm-6" style="margin-top:50px;">
        <p class="p1" align="center" style="color:#29bfca"><b>WHAT WE'LL DO</b></p>
		
<p class="p2"><b><br>Our General Pest Control Service covers all crawling insects such as :</b></p>

<ul>
<li>Cockroaches</li>
<li>Red/ black ants</li>
<li>Spiders</li>

</ul> 

<p class="p2"><b>Note :</b></p>
<ul>
<li>No need to vacate the premises during or after the treatment</li>
<li>Completely odourless solution, non messy and non smelly chemicals</li>
<li>We aim at total control and eradication of pests</li>
<li>All chemicals used are 100% safe and are not harmful to health</li>
<li>Our service is safe, effective and long lasting</li>
<li>Pests may not be completely eradicated in just one session</li>
<li>30 days service guarantee is offered in our one time service</li>
<li>Keep pets and children away during the service and from areas where chemicals have been applied</li>
</ul> </div>


   <div class="col-sm-6 borderspace" align="center">
         <form action="tgcheck.php" method="POST">
      
	  <label for="bhk">Select Type :</label>
   
	 <select id="bhk" name="bhksize" class="info" required>
      <option value="PT1">1 BHK</option>
      <option value="PT2">2 BHK</option>
      <option value="PT3">3 BHK</option>
      <option value="PT4">4 BHK</option>
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