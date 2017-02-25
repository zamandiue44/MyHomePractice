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
	<title>This is My Own Secret Personal Project.</title>
</head>
<body>
<script type="text/javascript">
	var d = new Date();
	theDay = d.getDay();
	switch (theDay){
		case 0:
		document.write("<h1><marquee>Today is Sunday.</marquee></h1>");
		break;
		case 1:
		document.write("<h1><marquee>Today is Monday.</marquee></h1>");
		break;
		case 2:
		document.write("<h1><marquee>Today is Tuesday..</marquee></h1>");
		break;
		case 3:
		document.write("<h1><marquee>Today is Webnesday.</marquee></h1>");
		break;
		case 4:
		document.write("<h1><marquee>Today is Thursday </marquee></h1>");
		break;
		case 5:
		document.write("<h1><marquee>Today is Friday. </marquee></h1>");
		break;
		default:
		document.write("<h1><marquee>Today is Saturday.(আজ শনিবার।) </marquee></h1>");
		
	}
</script>


<form action="" method="POST">
	<fieldset>
		<legend>Personal Accounting </legend>
		Investing Date: <br />
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

<button type="button"
onclick="document.getElementById('demo').innerHTML = Date()">
Click me to display Date and Time.</button>

<p id="demo"></p

	<br />
	<a href="E009D16Feb17.php" target="_blank">Exercise009ClickHere</a>
	
</body>
</html>