var watter = [];
var trash = [];
var dirtywatter = [];
var markers = [];
var markers2 = [];
var map;
var markerListener = null;





function initMap() {
  map = new google.maps.Map(document.getElementById('map'), {
	  zoom: 8,
	  //   mapTypeId: google.maps.MapTypeId.SATELLITE,
	  center: {
		  lat: 44.1168085,
		  lng: 18.2411794
	  }

  });



  // Adds a marker at the center of the map.  
  // addMarker(lat_lng);  

}

  loadInfo();


function drop(places) {
         clearMarkers();
  loadInfo();
  var neighborhoods = [];
  if (places === "watter") {
	  neighborhoods = watter;
	  var icon = 'icons/watter.png';
  }
  if (places === "trash") {
	  neighborhoods = trash;
	  var icon = 'icons/poo.png';
  }
  if (places === "dirtywatter") {
	  neighborhoods = dirtywatter;
	  var icon = 'icons/poison.png';
  }


  for (var i = 0; i < neighborhoods.length; i++) {
	  addMarkerWithTimeout(neighborhoods[i], i * 200, icon, i * 200,neighborhoods[i].info);
  }

}



var idMarker=0;

function addMarkerWithTimeout(position, timeout, icon, id,info) {

  window.setTimeout(function() {
	var newMarker=new google.maps.Marker({
		  position: {
			  lat: parseFloat(position.lat),
			  lng: parseFloat(position.lng)
		  },
		  map: map,
		  icon: icon,
		  id: id,
		  animation: google.maps.Animation.DROP
	  });
	  
	   var contentString = '<div class="contentInfo">"'+info+'"</div>';
        var infowindow = new google.maps.InfoWindow({
          content: contentString
        });
	
        var infowindow = new google.maps.InfoWindow({
          content: contentString
        });
        newMarker.addListener('click', function() {
          infowindow.open(map, newMarker);
        });
		
	  markers.push(newMarker);
  }, timeout);
}


function clearOneMarker(id) {
  markers.forEach(function(entry) {
	  if (entry.id === id) {
		  entry.setMap(null);
	  }
  });
}

function clearMarkers() {


  clear(markers);
  clear(markers2);
  // clear(trash);
  //clear(dirtywatter);

  markers = [];
  markers2 = [];
}

function clear(collect) {

  for (var i = 0; i < collect.length; i++) {
	  collect[i].setMap(null);
  }

}


function preview(typePreview) {
  map.setMapTypeId(typePreview);
}




function createMarker(places) {
  google.maps.event.removeListener(markerListener);

  markerListener = map.addListener('click', function addEventMarker(event) {
	  addMarker(event.latLng, places);
  });



}





function addMarker(location, places) {
  var icon;
  var type;
   idMarker++; 
  if (places === "watter") {
	  icon = 'icons/watter.png';
	  type = "watter";
  }
  if (places === "trash") {
	  icon = 'icons/poo.png';
	  type = "trash";
  }
  if (places === "dirtywatter") {
	  icon = 'icons/poison.png'
	  type = "dirtywatter";
  }


  var marker = new google.maps.Marker({
	
	  position: location,
	  draggable: true,
	  icon: icon,
	  type: type,
	  animation: google.maps.Animation.DROP,
	  map: map
  });
  
        
 var contentString = '<div class="contentInfo"><input type="text" id="'+idMarker+'" name="infoInput"  placeholder="Information about place"><br><input type="file" name="fileToUpload" id="fileToUpload"><input type="submit" value="Upload Image" name="submit"></div>';
        var infowindow = new google.maps.InfoWindow({
          content: contentString
        });

	marker.id=idMarker;
	//marker.info=document.getElementById(marker.id).value;
        marker.addListener('click', function() {
          infowindow.open(map, marker);
        });
  
  //marker.info=document.getElementById('textbox_id').value;
  
  /*
google.maps.event.addListener(marker, 'drop', function() 
{
geocodePosition(marker.getPosition());
});*/

  markers2.push(marker);

}


function geocodePosition(pos) {
  geocoder = new google.maps.Geocoder();
  geocoder.geocode({
		  latLng: pos
	  },
	  function(results, status) {
		  if (status == google.maps.GeocoderStatus.OK) {
			  $("#mapSearchInput").val(results[0].formatted_address);
			  $("#mapErrorMsg").hide(100);
		  } else {
			  $("#mapErrorMsg").html('Cannot determine address at this location.' + status).show(100);
		  }
	  }
  );
}


function saveInfo() {
	console.log("save info");
  var collectInfo = parserInfo();
  jQuery.ajax({
	  type: "POST",
	  url: "save-marker.php",
	  data: {
		  info: collectInfo
	  },
	  success: function(data) {
		  console.log("dodano hehe");
		   jQuery("#msg").append('<div class="alert alert-success fade in" style=" margin:0 auto !important; width:350px;"><strong>Success!</strong> Your markers have been successfully uploaded.</div>');

	  },
	  error: function(e) {
		  console.log(e.message);
		  	   jQuery("#msg").append('<div class="alert alert-danger fade in"><strong>Error!</strong> A problem has been occurred.</div>');





	  }
  });

}




function loadInfo() {
  var lista;
  jQuery.ajax({
	  type: "GET",
	  url: "load-marker-user.php",
	  dataType: 'JSON',
	  success: function(data) {
		  lista = data;

		  parserMarkerType(lista);

	  }
  });
  return lista;

}




function parserMarkerType(list) {
  list.forEach(function(entry) {

	  if (entry.type === "watter") {
		  watter.push(entry);
	  }
	  if (entry.type === "dirtywatter") {
		  dirtywatter.push(entry);
	  }
	  if (entry.type === "trash") {
		  trash.push(entry);
	  }

  });


}

function parserInfo() {
	var temp;
  var collectInfo = [];
  markers2.forEach(function(entry) {
	  console.log(entry);
	  var positionInfo = {};
	  positionInfo.lat = entry.getPosition().lat();
	  positionInfo.lng = entry.getPosition().lng();
	 
if(document.getElementById(entry.id)!==null){
 temp=document.getElementById(entry.id).value;	
}else{temp="Informacija";}
	  positionInfo.info =temp;
	  positionInfo.type = entry.type;
	  collectInfo.push(positionInfo);


  });
  //console.log(collectInfo);
  return collectInfo;

}