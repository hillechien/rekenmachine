<?php
/*
 * Aangepast: 8 sept. 2011
 *
 * Het rekenmachine voorbeeld.
 */
session_start();
$_SESSION['calcStatus'] = '';
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Rekenmachine voorbeeld</title>
		<link rel="stylesheet" type="text/css" href="css/rekenmachine.css" />
		<script type="text/javascript" src="lib/jquery-1.6.2.min.js" charset="utf-8"></script>
		<script type="text/javascript">
			$(function() {
				$('#calculator-buttons').click(function(ev) {
					var calcButton = $(ev.target);
					var buttonValue = calcButton.val();
					//$('#result').html('de knop <b>' + buttonValue + '</b> is ingedrukt. ');
    		        ev.preventDefault();
					$('#phpresult').load('calc1a.php', {button: buttonValue});
				});
			});
		</script>
	</head>
	<body>
		<div id='rekenmachine'>
			<div id="result"> </div>
			<div id="phpresult"> </div>
				<br/>
				<table  id="calculator-buttons">
					<tbody>
						<tr>
							<td>
							<button value='1'>1</button></td>
							<td><button value='2'/>2</button></td>
							<td><button value='3'/>3</button></td>
							<td><button value='/'/>/</button></td>
						</tr>
						<tr>
							<td><button value='4'/>4</button></td>
							<td><button value='5'/>5</button></td>
							<td><button value='6'/>6</button></td>
							<td><button value='*'/>*</button></td>
						</tr>
						<tr>
							<td><button value='7'/>7</button></td>
							<td><button value='8'/>8</button></td>
							<td><button value='9'/>9</button></td>
							<td><button value='-'/>-</button></td>
						</tr>
						<tr>
							<td><button value='0'/>0</button></td>
							<td><button value='.'/>.</button></td>
							<td><button value='='/>=</button></td>
							<td><button value='+'/>+</button></td>
						</tr>
						<tr>
							<td colspan='4'><button value='clear'/>clear</button></td>
						</tr>
					</tbody>
				</table>
		</div>
	</body>
</html>
