
var typeEntry="";
var infoEntry="";
function showListMarkers(){
	if (typeof infoMarkers != 'undefined'){
infoMarkers.forEach(function(entry) {
if(infoLastMarkers.indexOf(entry.id)==-1){
	typeEntry=entry.type;
	infoEntry=(entry.info).replace('""', "");


    jQuery("#sidebar").append(jQuery("<div class='panel panel-default' id='"+entry.id+"d'><div class='panel-heading'>Type: "+entry.type+"</div><div class='panel-body' >Info:"+entry.info+"<br><br><button id='"+entry.id+"' class='button'  type='button' onclick='showMarker("+entry.id+","+entry.lat+","+entry.lng+");'>Show</button><button id='"+entry.id+"' class='button'  type='button' onclick='changeStatus("+entry.id+");'>Add </button><button id='"+entry.id+"' class='button' onclick='removeMarker("+entry.id+")' >Remove</button><br></div></div>"));
   infoLastMarkers.push(entry.id);
   };
});
infoMarkers=[];
}}



function setIcon(type){
	var icon;

	  if (type=== "watter") {
	   icon = 'icons/watter.png';
  }
  if (type=== "trash") {
	   icon = 'icons/poo.png';
  }
  if (type === "dirtywatter") {
	   icon = 'icons/poison.png';
  }
	return icon;
}




function showMarker(id,lat,lng){

	
var icon=setIcon(typeEntry);

var position={"lat":lat,"lng":lng};
var button=document.getElementById(id);


    map = new google.maps.Map(document.getElementById('map'), {
          zoom: 8,
       //   mapTypeId: google.maps.MapTypeId.SATELLITE,
          center: {lat: lat, lng: lng}

        });





if(button.innerText==="Show"){
button.innerText=" Hide ";
 
 addMarkerWithTimeout(position, 200,icon,id,infoEntry);

}else{
 button.innerText="Show"; 
//clearMarkers();
clearOneMarker(id);
}



}



function changeStatus(id){
jQuery.ajax({
        type: "POST",
        url: "insert-marker.php",
        data:{info:id},
        success: function(data){
           console.log("dodano");
        },
        error: function(e){
            console.log(e.message);
        }
});
jQuery("#"+id+"d").remove();
}

function removeMarker(id){
	console.log("remove marker");
jQuery("#"+id+"d").remove();	
}

