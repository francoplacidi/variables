<?php

//Variable numerica
$numero = 5;
echo "Esto es una variable numero: $numero<br>";
var_dump($numero);
echo "<br><br>";

//Variable texto
$palabra = "Palabra";
echo "Esto es una variable llamada: $palabra<br>";
var_dump($palabra);
echo "<br><br>";

//Variable booleana
$boleana = true;
echo "Esto es una variable booleana: $boleana<br>";
var_dump($boleana);
echo "<br><br>";

//Variable arreglo
$colores = Array("Rojo", "Amarillo", "Azul");
echo "Esto es una variable arreglo: $colores[1]<br>";
var_dump($colores);
echo "<br><br>";

//Variable arreglo con propiedades
$verduras = Array("verdura1"=>"lechuga", "verdura2"=>"cebolla");
echo "Esto es una variable arreglo con propiedades: $verduras[verdura1]<br>";
var_dump($verduras);
echo "<br><br>";

//Variables objeto
$frutas = (object)["fruta1"=>"pera", "fruta2"=>"manzana"];
echo "Esto es una variable objeto: $frutas->fruta1 y $frutas->fruta2<br>";
var_dump($frutas);
echo "<br><br>";
?>