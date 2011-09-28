<?php
/*
 * Aangepast: 8 sept. 2011
 *
 * Het rekenmachine voorbeeld.
 */
session_start();
//echo 'hey! you kicked me!';
$button = $_POST['button'];
$display = $_SESSION['calcStatus'];
switch ($button) {
	case '=':
		eval("\$result = $display;");
		$_SESSION['calcStatus'] = $result;
		break;
	case 'clear':
		$_SESSION['calcStatus'] = '';
		break;
	default:
		$_SESSION['calcStatus'] .= $button;
		
		break;
}
echo $_SESSION['calcStatus'];
?>
