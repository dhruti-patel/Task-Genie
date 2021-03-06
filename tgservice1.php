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
      <img class="icon img1" src="images/house.jpg" alt="Generic placeholder image" width="500" height="250"></br>
    </div>
    <div class="col-sm-6">
     <p class="text-justify col">Give your home a professional cleaning and get it sparkling again! 
  Over time, the floors, corners, tiles and so much more get faded or stained. 
  Our cleaning agents ensure that they first assess your home before honing in on the type of products and methods to use. 
  We leave no stone unturned when it comes to cleaning your home. Book a service today and never worry about home 
  cleaning tasks ever again when you have the experts waiting to clean-up for you.</p></div>
  </div>
  </div>
  
  
  
  <fieldset>
  <legend style="color:#29bfca"><b><br><br>HOUSE CLEANING</b></legend>
 <div class="container-fluid space"> 
   <div class="row">
<div class="col-sm-6" style="margin-top:50px;">
        <p class="p1" align="center" style="color:#29bfca"><b>WHAT WE'LL DO</b></p>
		
<p class="p2"><b>Service Includes :</b></p>

<ul>
<li>Manual cleaning of floor</li>
<li>Cleaning of windows, window panes,window channels and grills</li>
<li>Removal of cobwebs</li>
<li>Vacuuming of sofa, chairs, mattresses, carpets, curtains</li>
<li>Cleaning and disinfection of washrooms</li>
<li>Dusting of Gadgets</li>
<li>De-greasing of kitchen area</li>
<li>Cleaning of cabinets and wardrobes externally</li>
<li>Cleaning of fans, tubes, switchboard, bulbs, door handles</li>
<li>Fridge, microwave and chimney exterior cleaning</li>
</ul> 


<p class="p2"><b>Note :</b></p>
<ul>
<li>Customer to provide for stool/ladder, water and electrical connection</li>
<li>Cost inclusive of GST</li>
</ul> </div>
   <div class="col-sm-6 borderspace" align="center">
     <label for="bhk">Select Type :</label>
   <form action="tgcheck.php" method="POST">
	 <select id="bhk" name="bhksize" class="info" required>
      <option value="HC1" selected>1 BHK</option>
      <option value="HC2">2 BHK</option>
      <option value="HC3">3 BHK</option>
      <option value="HC4">4 BHK</option>
    </select>
	<noscript><input type="submit" value="Submit"></noscript>
	
	
	
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