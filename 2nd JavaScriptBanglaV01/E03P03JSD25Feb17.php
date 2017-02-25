<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>JavaScript Learning</title>
	<script type="text/javascript">
	function show_prompt(){
		var name=prompt("Please Enter Your Name ", "Syed Zaman");
		if(name!=null && name!=""){
			document.write("Hello! " + name+ ". How are you today?");
		}
		
	}
	</script>
</head>
<body>
<input type="button" onclick="show_prompt()" value="Show a Prompt Box" />
<br />
<a href="E03P04JSD25Feb17.php">E03P04JSD25Feb17</a>
	
</body>
</html>