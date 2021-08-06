<html>
<head>
</title>CALCULATOR</title>
</head>
<body>

<form>
<input type="text" name="num1" placeholder="number1"/>
<input type="text" name="num2" placeholder="number2"/>

	<select name="operator">
	<option>None</option>
	<option>Add</option>
	<option>Subtract</option>
	<option>Multiple</option>
	<option>Divide</option>
	</select>
<br>
<br>
<button type="submit" name="good" value="submit">Calculate</button>
</form>
<p>The answer is:</p>
<?php
	if (isset($_GET['good']))
{
	$result1 = $_GET['num1'];
	$result2 = $_GET['num2'];
	$operator = $_GET['operator'];

switch ($operator)
	{
		case "Add":
                echo $result1 + $result2;
                break;
		

		case "Subtract":
                echo $result1 - $result2;
                break;
		

		case "Multiple":
                echo $result1 * $result2;
                break;
		

		case "Divide":
                echo $result1 / $result2;
                break;
		
	}
}
?>

</body>
</html>

