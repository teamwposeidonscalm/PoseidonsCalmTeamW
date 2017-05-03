<?php
include_once("connect.php");
//header("Content-Type: application/json; charset=UTF-8");

if(isset($_POST['info'])){

$data=$_POST['info'];
 //$json_array  = json_decode($data, true);
 $elementCount  = count($data);

$date = date('Y-m-d H:i:s');


for($i=0;$i<$elementCount;$i++){
//$query="INSERT INTO markers(id, lat, lng, info,type, status, time) VALUES ('','".$data[$i]['lat']."','".$data[$i]['lng']."','".$data[$i]['info']."','".$data[$i]['type']."','0','".$date."');";
$query="INSERT INTO markers (id, lat, lng, info,type, status, time)
SELECT * FROM (SELECT '','".$data[$i]['lat']."','".$data[$i]['lng']."','".$data[$i]['info']."','".$data[$i]['type']."','0','".$date."') AS tmp
WHERE NOT EXISTS (
    SELECT lat,lng FROM markers WHERE lat = '".$data[$i]['lat']."' AND lng='".$data[$i]['lng']."') LIMIT 1;";
$result = mysql_query($query);
}
/*
INSERT INTO markers (id, lat, lng, info,type, status, time)
SELECT * FROM (SELECT '','".$data[$i]['lat']."','".$data[$i]['lng']."','".$data[$i]['info']."','".$data[$i]['type']."','0','".$date."') AS tmp
WHERE NOT EXISTS (
    SELECT lat,lng FROM markers WHERE lat = '".$data[$i]['lat']."' AND lng='".$data[$i]['lng']."') LIMIT 1;
*/

/*if (!$result) {
    die('Invalid query: ' . mysql_error());
}*/


}

?>