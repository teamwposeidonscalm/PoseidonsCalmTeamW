<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
  <title></title>
  <link rel="stylesheet" type="text/css" href="style2.css">
<script src="jquery-3.1.1.min.js"></script>
 <script type="text/javascript" src="script.js"></script>
  <script type="text/javascript" src="script2.js"></script>
      <meta charset="utf-8">


    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional Bootstrap theme -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	
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
  
    <div id="map"></div>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDB4hVPmPuRcz147rRsrPHLm5R-l6i_ZTo&callback=initMap">
    </script>

 
    <div id="floating-panel">
      <button id="drop" onclick="drop('watter')">Pitka Voda</button>
       <button id="drop" onclick="drop('dirtywatter')">Zagadjena Voda</button>
       <button id="drop" onclick="drop('trash')">Zagadjen Okolis</button>
        <button id="drop" onclick="preview('satellite')">Satelit prikaz</button>
          <button id="drop" onclick="preview('roadmap')">Cestovni prikaz</button>
             <button id="drop" onclick="preview('terrain')">Geografski prikaz</button>
<button id="drop" onclick="clearMarkers()">Ukolni oznake</button>
    </div>
     </body>

    <div id="floating-panel2">
    Označite mjesta:<br>
      <button id="drop" onclick="createMarker('watter')">Pitka Voda</button><br>
      <button id="drop" onclick="createMarker('dirtywatter')">Zagađena Voda</button><br>
       <button id="drop" onclick="createMarker('trash')">Zagađen Okoliš</button><br>
         <button id="drop" onclick="createMarker('sisa')">Sisa</button><br>
         Sačuvaj lokacije:<br>
          <button id="drop" onclick="saveInfo()">Spremi</button><br>


      
    </div>
        <div id="sidebar"></div>


        <div id="datacount"></div>
		<a href="../logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Sign Out</a></li>
		</body>
</html>



                         
