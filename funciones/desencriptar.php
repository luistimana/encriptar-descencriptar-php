<?php
	function desencriptar($cadena) {
		$lcad = strlen($cadena);
		$cade = "";
		for($x=0; $x<$lcad;$x++){
			$car = substr($cadena,$x,1);
			$cade=$cade.chr(ord($car)-5);
			$x +=2;
		}
		return($cade);
	}
?>