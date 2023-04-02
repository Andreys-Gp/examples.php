<?php
//operador verdadero
$a= 73;
$b= 73;
echo "ambos son verdaderos: <br>";

var_dump($a and $b);
echo "<br>";

//operador verdadero
$a=9;
$b=9;
echo "ambos son verdaderos: <br>";
var_dump($a or $b);
echo "<br>";


//operador 
$a= 14;
$b= 24;
echo "ambos son verdaderos: <br>";
var_dump($a xor $b);
echo"<br>";

$a=-24;
$b=24;
echo "verdadero si a no es cierto: <br>";
var_dump(!$a);
echo "<br>";

$a=45;
$b=63;
echo "ambos son verdaderos: <br>";
var_dump($a && $b);
echo "<br>";

$a=57;
$b=74;
echo "ambos son verdaderos <br>";
var_dump($a || $b);
echo "<br>";


?>