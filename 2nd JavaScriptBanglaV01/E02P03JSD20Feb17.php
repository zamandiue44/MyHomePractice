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
		case 0:
		document.write("<b>Sleepy Sunday.</b>");
		break;
		case 1:
		document.write("<b>Sleepy Monday.</b>");
		break;
		case 2:
		document.write("<b>Sleepy Tuesday.</b>");
		break;
		case 3:
		document.write("<b><marquee>Today is Wednesday.(আজ বুধবার।)</marquee></b>");
		break;
		case 4:
		document.write("<b>আজ বৃহস্পতিবার।</b>");
		break;
		case 5:
		document.write("<b>Finally Friday.</b>");
		break;
		default:
		document.write("<b>I am Really Looking Forward to this weekend</b>");
		
	}
	
	
	
	</script>
		<p>Note that Sunday = 0, Monday = 1, Tuesday = 2 etc.</p>
	<br />
	<a href="E03P01JSD20Feb17.php" target="_blank">Exercise03Part01</a>
</body>
</html>