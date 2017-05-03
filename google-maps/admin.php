<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
  <title></title>
  <link rel="stylesheet" type="text/css" href="style.css">
<script src="jquery-3.1.1.min.js"></script>
 <script type="text/javascript" src="script.js"></script>
  <script type="text/javascript" src="script2.js"></script>
      <meta charset="utf-8">


    <meta name="viewport" content="width=device-width, initial-scale=1">



  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="../css/coin-slider.css" />
<script type="text/javascript" src="../js/cufon-yui.js"></script>
<script type="text/javascript" src="../js/cufon-titillium-250.js"></script>

<script type="text/javascript" src="../js/script.js"></script>
<script type="text/javascript" src="../js/coin-slider.min.js"></script>
	<script type="text/javascript">

var i=0;
	var infoMarkers;
	var infoLastMarkers=[];
	var countForList;

jQuery(document).ready(function() {


setInterval(function(){

//  console.log(infoMarkers.slice(-1).pop());
  //countForListinfoMarkers.slice(-1).pop();




			jQuery.ajax({
                type: "GET",
                url: "load-marker.php",
                dataType:'JSON', 
               success: function(data) {
			   infoMarkers=data;
			}
            });

showListMarkers();








i++;
}, 1000);


});







</script>

</head>

<body>
  <div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="menu_nav">
        <ul>
          <li ><a href="../index.php"><span>Home Page</span></a></li>
          <li><a href="support.html"><span>Support</span></a></li>
          <li><a href="about.html"><span>About Us</span></a></li>
          <li><a href="index.html"><span>Map</span></a></li>		  
          <li class="active"><a  href="admin.php"><span>Log in</span></a></li>
        </ul>
      </div>
      <div class="logo">
         <img src="../images/logoProject.png" class="logoImg">
      </div>
      <div class="clr"></div>
      <div class="slider">
     
        <div class="clr"></div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  </div>

	<div class="row" style=" width:80%;  margin-top: -30px; margin-right: auto; margin-left: auto;">
	 


  <div class="col-sm-4 col-md-3">
  <center>
    <div class="thumbnail">
      <div class="caption">
     
	  <h3 style="font-size:15px;" ><img src="icons/watter.png" alt="..."  > Drinkable water</h3>
       
        <p><button id="drop" onclick="createMarker('watter')" class="btn btn-primary" role="button" >Add Marker</button> </p>

	</div>
    </div>
	   </center>
  </div>
    <div class="col-sm-4 col-md-3">
	<center>
    <div class="thumbnail">
      <div class="caption">
    
	
      <h3 style="font-size:15px;" ><img src="icons/poison.png" alt="..."  > Contaminated water</h3>
        <p><button id="drop" onclick="createMarker('dirtywatter')" class="btn btn-primary" role="button">Add Marker</button> </p>
      </div>
    </div>
		</center>
  </div>
    <div class="col-sm-4 col-md-3">
		<center>
    <div class="thumbnail">
      <div class="caption">
  
	
       <h3 style="font-size:15px;" ><img src="icons/poo.png" alt="..."  > Polluted Environment</h3>
        <p><button  id="drop" onclick="createMarker('trash')" class="btn btn-primary" role="button">Add Marker</button> </p>
      </div>
    </div>
	</center>
  </div>


  <div class="col-sm-4 col-md-3 ">
    <div class="thumbnail">
		<center>
      <div class="caption">
	   <h3 style="font-size:15px;" ><img src="icons/dangerous.png" alt="..."  > Hazardous Areas</h3>
        <p><button id="drop" onclick="createMarker('watter')" class="btn btn-primary" role="button">Add Marker</button> </p>
      </div>
    </div>
		</center>
  </div>



</div>

    <div id="map" class="mapadmin"></div>
	 <div id="sidebar" ><span class="sidebarheader">Requests for new place</span><br><br></div>

    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDB4hVPmPuRcz147rRsrPHLm5R-l6i_ZTo&callback=initMap">
    </script>







	
	<br>
<div class="well well-lg" style=" max-width:70%; margin:0 auto !important;">
	<center><h2>Filter Markers:</h2></center>
	
<div class="row" style="margin-right: -30px; margin-left: 15px;" >
	 <div class="col-sm-4 col-md-4">
	 <button class="btn btn-primary" onclick="drop('watter')">Drinkable water</button>
	 </div>
	  <div class="col-sm-4 col-md-4">
	  <button class="btn btn-primary" onclick="drop('dirtywatter')">Contaminated water</button>
	 </div>
	  <div class="col-sm-4 col-md-4">
	 <button class="btn btn-primary"  onclick="drop('trash')">Polluted Environment</button>
	 </div>
	 </div><br>
	 <div class="row" style="margin-right: -30px; margin-left: 15px;" >
	  <div class="col-sm-4 col-md-4">
	 	 <button class="btn btn-primary"  onclick="drop('trash')">Hazardous Areas</button>
	 </div>
	  <div class="col-sm-4 col-md-4">
	   <button class="btn btn-primary" onclick="clearMarkers()">Hide Markers</button>
	 </div>
	  <div class="col-sm-4 col-md-4">
	    <button id="drop" onclick="saveInfo()" type="button" class="btn btn-success text-center">Save destionations</button>
	 </div>
	 </div>



 



   <div id="msg" class="msgSuc"></div>
   </div>
<a href="../logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Sign Out</a></li>

</body>
</html>



                         
