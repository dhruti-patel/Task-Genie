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
      <img class="icon img1" src="images/waxing.jpg" alt="Generic placeholder image" width="500" height="250"></br>
    </div>
    <div class="col-sm-6">
     <p class="text-justify col">Get smooth, sleek and sexy. Waxing isn’t just about hair removal. It’s a skin care treatment as well. 
	 Our fast and effective waxing services will leave your skin hair-free and fabulously smooth. 
	 Before your first waxing service, please allow a minimum of ten days of hair growth. To prevent irritation and ingrown hair, 
	 an antibacterial/antimicrobial cooling lotion, is applied immediately after the hair removal treatment.Skin care products that contain glycolic acids or alpha 
	 hydroxy acids must be discontinued 3-5 days before the waxing service.

</p></div>
  </div>
  </div>
  
  
  
  <fieldset>
  <legend style="color:#29bfca"><b><br><br>REGULAR WAXING</b></legend>
 <div class="container-fluid space"> 
   <div class="row">
<div class="col-sm-6" style="margin-top:50px;">
        <p class="p1" align="center" style="color:#29bfca"><b>WHAT WE'LL DO</b></p>
		
<p class="p2"><b><br>Service Includes :</b></p>

<ul>
<li>Removes unwanted hair from arms/legs/stomach/back</li>

</ul> 

<p class="p2"><b>Note :</b></p>
<ul>
<li>No cuts, wounds, bruises or skin Infection on the area to be waxed</li>
<li>Area to be waxed shouldn't be shaved in the past 30 days</li>
<li>Hair should be at least 1/4th of an inch to be able to wax properly</li>
<li>If getting waxed for the first time : possibility of getting hives / inflammation on the skin<br>is normal which subsides in few hours to few days depending on person to person</li>
<li>Ensure AC is switched on for waxing service</li>
</ul> </div>


  

   <div class="col-sm-6 borderspace" align="center">
         <form action="tgcheck.php" method="POST">
	  
	  <label for="bhk">Select Type :</label>

	 <select id="bhk" name="bhksize" class="info" required>
      <option value="WXHA">Half Arms Waxing</option>
      <option value="WXHL">Half Legs Waxing</option>
      <option value="WXST">Stomach Waxing</option>
      <option value="WXBK">Back Waxing</option>
	  <option value="WXUA">Underarms Waxing</option>
      <option value="WXFA">Full Arms Waxing (Including Underarms)</option>
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