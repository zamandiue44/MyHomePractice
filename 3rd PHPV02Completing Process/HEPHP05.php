<?php
$fonts = "arial";

?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>PHP Syntax</title>
	<style>
	.phpcoding{width:900px; margin: 0px auto; background-color:<?php echo "#ddd;"?>}
	.headeroption, .footeroption{background-color:#444; color:#fff; text-align:center; padding:20px}
	.headeroption h2, .footeroption h2{margin:0}
	.maincontent{min-height:400px;padding:20px}
	</style>
</head>
<body>
	<div class="phpcoding">
	
		<section class="headeroption">
		<h2><?php echo "PHP Fundamental Training"?></h2>
		</section>
		
		<section class="maincontent">
			<?php
			echo "I Love PHP";
			echo "<br />".$fonts;
			$a=5;
			$b=10;
			$c=$a+$b;
			echo "<br />Totla value is " . $c." Ok Fine";
			
			?>
		</section>
		
		<section class="footeroption">
		<h2><?php echo "<a href='http://zamanit.com/' target='_blank'>ZamanIT</a>"?></h2>
		</section>

	</div>
	
</body>
</html>