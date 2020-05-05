
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
<link rel="stylesheet" href="csscode/tghomecss.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="jscode/slideshow.js"></script>
<script src='https://api.mapbox.com/mapbox.js/v3.2.1/mapbox.js'></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<link href='https://api.mapbox.com/mapbox.js/v3.2.1/mapbox.css' rel='stylesheet' />

<script>
  $(document).ready(function(){
	  
	  var commentCount = 2;
	  $("button").click(function() {
		  
		  commentCount = commentCount + 2;
		  $("#comments").load("load-comments.php", {
			 commentNewCount: commentCount
		  });
		  
	  });
	  
  });
</script>

</head>

<style>
  body {background-color: white;}
  h1 {color: black;}
  p {color: black;}

</style>

<body>
<div>
<nav class="navbar">
  	<div class="header">
		<img style="display: inline;" src="images/tglogo.png" alt="logo" />
		<a href="tglogin.php">My Account</a>
		<div id="searchnav">
		<form action="tgsearch.php" method="GET" >
        <input type="text" placeholder="Search" name="search">
      <button type="submit" class="btn btn-default">Submit</button>
	  </form>
	  </div>
    </div>
</nav>
</div>

<div class="service">
<div class="row">
  <div class="col-sm-3" align="center">
  <img class="icon" src="images/cleaner.png" alt="Generic placeholder image" width="140" height="140"></br>
  <div class="dropdown">
  <a>CLEANING</a>
  <div class="dropdown-content">
    <a href="tgservice1.php">House</a>
    <a href="tgservice2.php">Office</a>
    <a href="tgservice3.php">Kitchen</a>
  </div>
</div>

  </div>
  <div class="col-sm-3" align="center">
  <img class="icon" src="images/home-repair.png" alt="Generic placeholder image" width="140" height="140"></br>
   <div class="dropdown">
  <a>REPAIRS</a>
  <div class="dropdown-content">
    <a href="tgservice4.php">AC</a>
    <a href="tgservice5.php">Computer</a>
    <a href="tgservice6.php">Microwave</a>
  </div>
</div>

  </div>
  <div class="col-sm-3" align="center">
  <img class="icon" src="images/pesticon.png" alt="Generic placeholder image" width="140" height="140"></br>
 <div class="dropdown">
  <a>PEST CONTROL</a>
  <div class="dropdown-content">
    <a href="tgservice7.php">General</a>
   
  </div>
</div>

  </div>
  <div class="col-sm-3" align="center">
  <img class="icon" src="images/face-mask.png" alt="Generic placeholder image" width="140" height="140"></br>
<div class="dropdown">
  <a>BEAUTY AND SPA</a>
  <div class="dropdown-content">
    <a href="tgservice8.php">Regular Waxing</a>
    <a href="tgservice9.php">Hairstyling and Makeup</a>
	 <a href="tgservice10.php">Packages</a>
  </div>
</div>
  </div>
</div>
</div>

<div class="midsearch">
<form action="tgsearch.php" method="GET">
<input type="text" placeholder="  Search Service.." maxlength="20" id="search" name="search">
<input type="submit" value="GO" id="submit">
</form>
</div>

<div class="workup">
<h1 align="center"> <b>How It Works</b></h2></br>
<div class="row">
<div class="col-sm-4" align="center"> <p class="head2"><b>BOOK</b></p><p class="inside"  >From wide range of services</p></div>
<div class="col-sm-4" align="center"> <p class="head2"><b>PAY</b></p><p class="inside" >Before the service is done</p></div>
<div class="col-sm-4" align="center"> <p class="head2"><b>RELAX</b></p><p class="inside" >While the service is done</p></div>
 </div>
 </div>
 
 

 <div class="locations">
<h1 align="center" style="color:#29bfca" > <b><i class="fa fa-map-marker" style="font-size:48px;color:red"></i>&nbsp;&nbsp;Our Locations</b></h2></br>
<!-- <div class="row">
<div class="col-sm-2" align="center"> <p class="head2"><b>MUMBAI</b></p></div>
<div class="col-sm-2" align="center"> <p class="head2"><b>PUNE</b></p></div>
<div class="col-sm-2" align="center"> <p class="head2"><b>BENGALURU</b></p></div>
<div class="col-sm-2" align="center"> <p class="head2"><b>HYDERABAD</b></p></div>
<div class="col-sm-2" align="center"> <p class="head2"><b>AHEMDABAD</b></p></div>
<div class="col-sm-2" align="center"> <p class="head2"><b>DELHI</b></p></div> -->
 </div>
 <!-- <div id="blue-div">
      This div pushes content down
    </div> -->
  <div id="map-container">
  <div id="map"> </div>
</div>



<div id="comments" class="locations">
<h1 align="center" style="color:#29bfca" > <b><i class="fa fa-quote-left" aria-hidden="true" style="font-size:48px;color:red"></i>
&nbsp;&nbsp;Testimonials</b></h2></br>

<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "task_genie";

$conn = mysqli_connect($servername,$username,$password,$dbname);

$sql1 = "SELECT * FROM feedback ORDER BY feedid DESC LIMIT 2";
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


 </div>
 
 <center><button class="btn"><b>Show More Comments</button>
 
 
<script>
  L.mapbox.accessToken = 'pk.eyJ1IjoiZGhydXRpcCIsImEiOiJjazZramlqbWUwNG9pM3JycmhyZW03ZjBmIn0.Y8QuGdAAviTnD-fNZQ3aPA';
var map = L.mapbox.map('map')
  .setView([34.0479,100.6197], 4)
  .addLayer(L.mapbox.styleLayer('mapbox://styles/mapbox/light-v10'));
var myLayer = L.mapbox.featureLayer().addTo(map);

var geojson = [
  {
    type: 'Feature',
    geometry: {
      type: 'Point',
      coordinates: [72.585022, 23.033863]
    },
    properties: {
      icon: {
        iconUrl: 'images/genie.png',
        iconSize: [50, 50], // size of the icon
        iconAnchor: [25, 25], // point of the icon which will correspond to marker's location
        popupAnchor: [0, -25], // point from which the popup should open relative to the iconAnchor
        className: 'dot'
      }
    }
  },
  {
    type: 'Feature',
    geometry: {
      type: 'Point',
      coordinates: [72.877426, 19.076090]
    },
    properties: {
      icon: {
        iconUrl: 'images/genie.png',
        iconSize: [50, 50], // size of the icon
        // iconAnchor: [25, 25], // point of the icon which will correspond to marker's location
        // popupAnchor: [0, -25], // point from which the popup should open relative to the iconAnchor
        className: 'dot'
      }
    }
  },
  {
    type: 'Feature',
    geometry: {
      type: 'Point',
      coordinates: [73.8567,18.5204]
    },
    properties: {
      icon: {
        iconUrl: 'images/genie.png',
        iconSize: [50, 50], // size of the icon
        // iconAnchor: [25, 25], // point of the icon which will correspond to marker's location
        // popupAnchor: [0, -25], // point from which the popup should open relative to the iconAnchor
        className: 'dot'
      }
    }
  },
  {
    type: 'Feature',
    geometry: {
      type: 'Point',
      coordinates: [77.5946, 12.9716]
    },
    properties: {
      icon: {
        iconUrl: 'images/genie.png',
        iconSize: [50, 50], // size of the icon
        // iconAnchor: [25, 25], // point of the icon which will correspond to marker's location
        // popupAnchor: [0, -25], // point from which the popup should open relative to the iconAnchor
        className: 'dot'
      }
    }
  },
  {
    type: 'Feature',
    geometry: {
      type: 'Point',
      coordinates: [77.5946, 12.9716]
    },
    properties: {
      icon: {
        iconUrl: 'images/genie.png',
        iconSize: [50, 50], // size of the icon
        // iconAnchor: [25, 25], // point of the icon which will correspond to marker's location
        // popupAnchor: [0, -25], // point from which the popup should open relative to the iconAnchor
        className: 'dot'
      }
    }
  },
  {
      "type": "Feature",
      "geometry": {
          "type": "Point",
          "coordinates": [78.4867, 17.3850]
      },
      "properties": {
          "icon": {
              "iconUrl": "images/genie.png",
              "iconSize": [50, 50],
              "iconAnchor": [25, 25],
              "popupAnchor": [0, -25],
              "className": "dot"
          }
      }
  },
  {
      "type": "Feature",
      "geometry": {
          "type": "Point",
          "coordinates": [77.1025,28.7041]
      },
      "properties": {
          "icon": {
              "iconUrl": "images/genie.png",
              "iconSize": [50, 50],
              "iconAnchor": [25, 25],
              "popupAnchor": [0, -25],
              "className": "dot"
          }
      }
  }
];
myLayer.on('layeradd', function(e) {
  var marker = e.layer,
    feature = marker.feature;
  marker.setIcon(L.icon(feature.properties.icon));
});
myLayer.setGeoJSON(geojson);
map.scrollWheelZoom.disable();
</script>
<style>
      #map-container {
        position: relative;
        height: 180px;
        width:800px;
      }

      #map {
        position: relative;
        height: inherit; 
        width: inherit;
      }
      
      #blue-div{
        height: 200px;
        background-color: #bee9f7;
        width: 800px;
      }
    </style>
    <div>

<!-- start sw-rss-feed code -->
<script type="text/javascript">
<!--
rssfeed_url = new Array();
rssfeed_url[0]="https://rss.feedspot.com/folder/4BTMuWYg5A==/rss/rsscombiner"; 
rssfeed_url[1]="https://www.goodhousekeeping.com/rss/home.xml/"; 
rssfeed_url[2]="https://www.goodhousekeeping.com/rss/beauty.xml/";  
rssfeed_frame_width="230";
rssfeed_frame_height="260";
rssfeed_scroll="on";
rssfeed_scroll_step="6";
rssfeed_scroll_bar="off";
rssfeed_target="_blank";
rssfeed_font_size="12";
rssfeed_font_face="";
rssfeed_border="on";
rssfeed_css_url="https://feed.surfing-waves.com/css/style7.css";
rssfeed_title="on";
rssfeed_title_name="";
rssfeed_title_bgcolor="#3366ff";
rssfeed_title_color="#fff";
rssfeed_title_bgimage="";
rssfeed_footer="off";
rssfeed_footer_name="rss feed";
rssfeed_footer_bgcolor="#fff";
rssfeed_footer_color="#333";
rssfeed_footer_bgimage="";
rssfeed_item_title_length="50";
rssfeed_item_title_color="#666";
rssfeed_item_bgcolor="#fff";
rssfeed_item_bgimage="";
rssfeed_item_border_bottom="on";
rssfeed_item_source_icon="off";
rssfeed_item_date="off";
rssfeed_item_description="on";
rssfeed_item_description_length="120";
rssfeed_item_description_color="#666";
rssfeed_item_description_link_color="#333";
rssfeed_item_description_tag="off";
rssfeed_no_items="0";
rssfeed_cache = "e2fb1fc5cda78ec7722c041430143e12";
//-->
</script>																																								<script type="text/javascript" src="//feed.surfing-waves.com/js/rss-feed.js"></script>
																																													<div style="color:#ccc;font-size:10px; text-align:right; width:230px;">powered by <a href="https://surfing-waves.com" rel="noopener" target="_blank" style="color:#ccc;">Surfing Waves</a></div>
	</div>


 
 </div>
 

</body>
</html>