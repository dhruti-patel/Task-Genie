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
      <img class="icon img1" src="images/package.jpg" alt="Generic placeholder image" width="500" height="250"></br>
    </div>
    <div class="col-sm-6">
     <p class="text-justify col">Our luxury spa packages are the ultimate luxury experience.
We have a range of exquisite beauty and spa package to choose from, each designed to pamper you and take you to
new levels of relaxation and tranquillity. Surrender to an experience of ultimate relaxation in sweet solitude.
Take a mini-holiday from the bustle of everyday life and select the day spa treatment that best meets your requirements or is the decadent treat you know you deserve. 
Let our specialist beauty advisers and therapists soothe, restore, and help give you the relaxed glow you’ve been dreaming of.
On the outside you will be re-beautified. On the inside you will feel more relaxed and more like ‘you’.
</p></div>
  </div>
  </div>
  
  
 
  <fieldset>
  <legend style="color:#29bfca"><b><br><br>PACKAGES</b></legend>
 <div class="container-fluid space"> 
   <div class="row">
<div class="col-sm-6" style="margin-top:50px;">
        <p class="p1" align="center" style="color:#29bfca"><b>WHAT WE'LL DO</b></p>
		
<p class="p2"><b><br>Wax and Groom</b></p>

<ul>
<li>Waxing (Full legs, Full arms, Underarms)</li>
<li>Threading (Eyebrows, Upper lip)</li>
<li>Detan Pack (Face and Neck)</li>

</ul> 

<p class="p2"><b><br>Eyecatcher Glow</b></p>
<ul>
<li>Glovite Facial</li>
<li>Threading (Eyebrows, Upper lip)</li>
<li>Head Massage</li>

</ul> 


<p class="p2"><b><br>Head to Toe</b></p>

<ul>
<li>Hair Spa</li>
<li>Classic Manicure</li>
<li>Classic Pedicure</li>
<li>Threading (Full Face)</li>

</ul> 


<p class="p2"><b><br>Pre Bridal Makeover</b></p>

<ul>
<li>Power Brightening Facial</li>
<li>Detan Manicure</li>
<li>Detan Pedicure</li>
<li>Hair Spa</li>
<li>Full Body Waxing</li>
<li>Threading (full face)</li>
</ul> 


 </div>


  

   <div class="col-sm-6 borderspace" align="center">
           <form action="tgcheck.php" method="POST">
	  
	  <label for="bhk">Select Type :</label>
  
	 <select id="bhk" name="bhksize" class="info" required>
      <option value="PKWG">Wax and Groom</option>
      <option value="PKEG">Eyecatcher Glow</option>
      <option value="PKHT">Head to Toe</option>
      <option value="PKBM">Pre Bridal Makeover</option>
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