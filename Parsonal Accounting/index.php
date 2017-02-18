<?php
if(isset($_POST['zaman']))
{
$InvestingDate=$_POST['InvestingDate'];
$fname=$_POST['Fittings'];
$lname=$_POST['AmountOfMoney'];

echo $InvestingDate."<br />";
echo $fname."<br />";
echo $lname."<br />";

}


?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Zaman is Learning</title>
</head>
<body>

<form action="" method="POST">
	<fieldset>
		<legend>Personal Accounting </legend>
		Investing Data: <br />
		<input type="text" name="InvestingDate" value="" />
		<br />
		Fittings <br />
		<input type="text" name="Fittings" value="" />
		<br />
		Amount of Money <br />
		<input type="text" name="AmountOfMoney" value="" />
		
		<br />
		<input type="submit" value="Submit" name="zaman" />
		<br />
	</fieldset>
</form>
	<br />
	<a href="E009D16Feb17.php" target="_blank">Exercise009ClickHere</a>
</body>
</html>