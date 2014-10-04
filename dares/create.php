<?php
$dare = $_POST['dare'];
$challenger = $_POST['challenger'];
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];

echo "{\"dare\": $dare, \"challenger\": $challenger, \"latitude\": $latitude, \"longitude\": $longitude }";
?>
