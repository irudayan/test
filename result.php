<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>result</title>
</head>
<body>

<?php
$marks = 40;

if ($marks>=60)
{
	$MARKS = "First Division";
}
else if($marks>=45)
{
	$MARKS = "Second Division";
}
else if($marks>=33)
{
	$MARKS = "Third Division";
}
else
{
	$MARKS= "Fail";
}

echo "$MARKS";
?>
</body>
</html>