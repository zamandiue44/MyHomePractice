<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>JavaScript Learning</title>
	<script type="text/javascript">
	function showConfirmm(){
		var r=confirm("Press a Button.")
		if(r==true){
			document.write("You Press OK.");
		}
		else{
			document.write("You Press Cancel.")
		}
	}
	</script>
</head>
<body>
<input type="button" onclick="showConfirmm()" value="Show A Confirm Box." />
<br />
<a href="E03P03JSD25Feb17.php" target="_blank">E03P03JSD25Feb17</a>
	
</body>
</html>