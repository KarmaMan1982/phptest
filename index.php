<?php
	$Summand1 = 0;
	$Summand2 = 0;
	$Summe = 0;
	if (isset($_POST['tbSummand1']) && isset($_POST['tbSummand2'])){
		$Summand1 = $_POST['tbSummand1'];
		$Summand2 = $_POST['tbSummand2'];
		$Summe = $Summand1 + $Summand2;
	}
?>

<html>
	<head>
		<title>Additionsprogramm</title>
		<style type="text/css">
			#btAddition{
				text-align: center;
				vertical-align: middle;
				width: 100%;
			}
		</style>
	</head>
	<body>
		<form id="frmAddition" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<table>
				<tr><td><label for="tbSummand1">Erster Summand</label></td><td><input type="text" name="tbSummand1" id="tbSummand1" value="<?php echo $Summand1; ?>"></td></tr>
				<tr><td><label for="tbSummand2">Zweiter Summand</label></td><td><input type="text" name="tbSummand2" id="tbSummand2" value="<?php echo $Summand2; ?>"></td></tr>				
				<tr><td colspan="2"><input type="submit" name="btAddition" id="btAddition" value="Zusammenz&auml;hlen!"></td></tr>
				<tr><td><label for="tbSummand2">Summe</label></td><td><input type="text" name="tbSumme" id="tbSumme" value="<?php echo $Summe; ?>"></td></tr>								
			</table>
		</form>
	</body>
</html>