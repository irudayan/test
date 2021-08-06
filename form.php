
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>FORM</title>
</head>
<body>

<form method='POST'>
name:<input type="text" name="name">
<input type="submit" value="Submit">
</form>
<?php
	$name = $_POST['name'];
	echo "$name";
?>
</body>
</html>