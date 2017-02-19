<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<script type="text/javascript">
	var d = new Date();
	theDay = d.getDay();
	switch (theDay){
		case 5:
		document.write("<b>Finally Friday.</b>");
		break;
		case 6:
		document.write("<b>Superday Saturday</b>");
		break;
		case 0:
		document.write("<b>Sleepy Sunday.</b>");
		break;
		default:
		document.write("<b>I am Really Looking Forward to this weekend</b>");
		
	}
	
	
	
	</script>
		<p>Note that Sunday = 0, Monday = 1, Tuesday = 2 etc.</p>
	<br />
	<a href="E02P03JSD20Feb17.php">Exercise02Part03</a>
</body>
</html>