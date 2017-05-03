<?php
include_once("connect.php");
//header("Content-Type: application/json; charset=UTF-8");

if(isset($_POST['info'])){

$data=$_POST['info'];
 //$json_array  = json_decode($data, true);


$query="UPDATE markers SET status='1' WHERE id='".$data."' ";

$result = mysql_query($query);





/*if (!$result) {
    die('Invalid query: ' . mysql_error());
}*/


}

?>