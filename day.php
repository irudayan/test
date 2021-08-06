<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>days</title>
</head>
<body>

<?php

$day=friday;

if ($day>=monday) {
	$day="monday";
}
elseif ($day>=tuesday) {
	$day="tuesday";
} 
elseif($day>=wednesday) {
	$day="wednesday";
}
elseif($day>=thruesday){
	$day="thruesday";
}
elseif($day>=friday){
	$day="friday";
}
elseif($day>=saturday){
	$day="saturday";
}
else{
	$day>="sunday;"
}
echo "$day";
?>

</body>
</html>