<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<form action="" method="post">
	<table>
	<tr>
		<td>Enter the first Number: </td>
		<td><input type="number" name="num1" /></td>
	</tr>
	</table>
	
	<table>
	<tr>
		<td>Enter the secone Number: </td>
		<td><input type="number" name="num2" /></td>
	</tr>
	</table>
	
	<table>
	<tr>
		<td></td>
		<td><input type="submit" name="calculation" value="calculate" /></td>
	</tr>
	</table>
	
	</form>
	<?php
		if(isset($_post['calculation'])){
		$numOne= $_post['num1'];
		$numTwo= $_post['num2'];
		
		$cal= new calculation;
		}
	
	
	?>

























</body>
</html>

























