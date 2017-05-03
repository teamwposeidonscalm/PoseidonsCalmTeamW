<?php
include_once("connect.php");


echo getMarkersInfoUser();

function getMarkersInfoUser(){

$query="SELECT * FROM markers WHERE status='1';";
//$query2="SELECT count(*) AS total FROM markers WHERE status='0';";
//$query2 = mysql_query($query2);
//$query2=mysql_fetch_assoc($query2);

//$count=$query2['total'];


//$query="SELECT * FROM markers WHERE status='0';";


$query = mysql_query($query);

  $markersInfo = array();

    while($row =mysql_fetch_assoc($query))
    {
       $markersInfo[] = $row;
    }

  //array_push($markersInfo,$count);
 $markersInfo=json_encode($markersInfo);

 return $markersInfo;	
 //$count=json_encode($count);
 //return $count;
 //echo $count;
}



/*
SELECT * FROM 
(SELECT * FROM markers 
ORDER BY id DESC LIMIT 10) 
sub ORDER BY id ASC;



SELECT COUNT(*) FROM fooTable;
*/
?>



