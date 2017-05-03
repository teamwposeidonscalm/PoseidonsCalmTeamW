<?php
include_once("load-marker.php");
$listNewMarker=getMarkersInfo();



?>

<script type="text/javascript">
 infoMarkers= <?php  include_once("notifications.php"); echo $listNewMarker; ?>;
</script>