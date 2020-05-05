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
      <br><img class="icon img1" src="images/makeup.jpg" alt="Generic placeholder image" width="500" height="250"></br>
    </div>
    <div class="col-sm-6">
     <p class="text-justify col">Life often gets so busy, but looking good should never get in your way. With artists ready to get you glam, 
	 all you have to do is book an appointment and someone will come to you! 
	 Hair and Make Up Stylist at Task Genie have put together a few different looks to 
	 get you started on our first appointments. Look no further for inspiration then our curated 
	 collection of the hottest trends in hair and make up, all that can be done in the comfort of your own home with one of the Task Genie stylists.
	 Beauty shouldn’t have to come at a huge cost. Everyone deserves to look their best.
	 Our fair prices give those other walk — in salons a run for their money and make sure that you have the experience you deserve at a competitive rate.

</p></div>
  </div>
  </div>
  
  
 
  <fieldset>
  <legend style="color:#29bfca"><b><br><br>HAIRSTYLING AND MAKEUP</b></legend>
 <div class="container-fluid space"> 
   <div class="row">
<div class="col-sm-6" style="margin-top:50px;">
        <p class="p1" align="center" style="color:#29bfca"><b>WHAT WE'LL DO</b></p>
		
<p class="p2"><b><br>Subtle Makeup + Free hairstyling</b></p>
<ul>
<li>Complete Professional Makeup</li>
<li>Hair: Straightening, Blow-dry, Curls, Buns, Braids</li>
</ul> 


		
<p class="p2"><b><br>Detailed Makeup + Free hairstyling</b></p>
<ul>
<li>Smokey/ Shimmery eyes + False Lashes</li>
<li>Hair: Straightening, Blow-dry, Curls, Buns, Braids</li>
</ul> 

		
<p class="p2"><b><br>Makeup + Hair for Photoshoot</b></p>
<ul>
<li>Multiple looks for the entire shoot</li>
</ul> 


</div>


  

   <div class="col-sm-6 borderspace" align="center">
         <form action="tgcheck.php" method="POST">
	  
	  <label for="bhk">Select Type :</label>
    
		 <select id="bhk" name="bhksize" class="info" required>
      <option value="MKSUBTLE">Subtle Makeup + Free hairstyling</option>
      <option value="MKDETAIL">Detailed Makeup + Free hairstyling</option>
      <option value="MKMUL">Makeup + Hair for Photoshoot</option>
    
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