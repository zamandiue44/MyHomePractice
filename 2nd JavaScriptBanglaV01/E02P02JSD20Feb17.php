<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<script type="text/javascript">
	var d = new Date();
	var time= d.getHours();
	if (time< 10){
		document.write("<h1>Good Morning.</h1>");
	}
	else if(time>=10 && time<16){
		document.write("<b>Good Day</b>");
	}
	else{
		document.write("<b>Hello World!</b>");
	}
	
	
	</script>
		
	<br />
	<a href="E02P03JSD20Feb17.php">Exercise02Part03</a>
</body>
</html>