<?php
function encriptar_cadena($cadena)
{
    $cade="";
    $car="";
    $longitudcad=strlen($cadena);

    for($x=0;$x<$longitudcad;$x++){
      $car=substr($cadena,$x,1);
      $cade=$cade.chr(ord($car)+5).rand(0,9).chr(rand(ord('A'),ord('Z')));
     }

    return($cade);

}

$cade_inicial="Luis Timana";
$encriptado=encriptar_cadena($cade_inicial);

echo "<b>Texto: </b>".$cade_inicial."<br>";
echo "<b>Texto Encriptado: </b>".$encriptado."<br>";

function desencriptar($cadena){

      $cade="";
      $longitud=strlen($cadena);
      
      for($x=0; $x<$longitud;$x++){
            $car = substr($cadena,$x,1);
            $cade=$cade.chr(ord($car)-5);
            $x +=2;
      }

  return($cade);
}

echo "<b>Texto desencriptado: </b>".desencriptar($encriptado);