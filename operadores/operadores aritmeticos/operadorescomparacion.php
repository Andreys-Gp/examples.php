<?php
//operador de comparacion
$a= 74;
$b= 14;

echo " soy el operador == \n";
var_dump($a == $b);
echo "<br>";

//operador de identidad
$a= 12;
$b= 12;

echo "soy el operador === \n";
var_dump($a === $b);
echo "<br>";

//operador distinta identidad
$a= 11;
$b= 8;

echo "soy el operador !== \n";
var_dump($a !== $b);
echo "<br>";

//operador no son iguales 
$a= 11;
$b= 7;

echo "soy el operador != \n";
var_dump($a != $b);
echo "<br>";

//operador no igual
$a= 88;
$b= 14;

echo "soy el operador <> \n";
var_dump($a <> $b);
echo "<br>";

//menor que 
$a= 41;
$b= 98;

echo "soy el operador < \n";
var_dump($a < $b);
echo "<br>";

//mayor que 
$a= 12;
$b= 24;

echo " soy el operador > \n";
var_dump($a > $b);
echo "<br>";

//menos o igual que 
$a= 15;
$b= 98;

echo "soy el operador <= \n";
var_dump($a <= $b);
echo "<br>";

//mayor o igual que
$a= 25;
$b= 25;

echo "soy el operador >= \n";
var_dump($a >= $b);
echo "<br>";

//astronave
$a= 8;
$b= 7;

echo "soy el operador <=> \n";
var_dump($a <=> $b);
echo "<br>";
?>