<?php
function encriptar($cadena) {
	$lcad = strlen($cadena);
	$cade = "";
	for($x=0; $x<$lcad;$x++){
		$car = substr($cadena,$x,1);
		$cade=$cade.chr(ord($car)+5).rand(0,9).chr(rand(ord('A'),ord('Z')));
	}
	return($cade);
}
?>