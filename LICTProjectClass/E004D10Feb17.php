<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Zaman is Learning</title>
</head>
<body>
<?php
	$x=5; //global scope 
	function myTest(){
		$x=5;//Local scope
		echo "<p>Variable x inside function is : $x</p>";
	}
	myTest();
	echo "<p>Variable x outside function is : $x</p>";
?>
	
	
	
	















<a href="E005D10Feb17.php" target="_blank">Exercise005ClickHere</a>
</body>
</html>