<?php

//Numerical variable
$number = 5;
echo "This is a numerical variable: $number<br>";
var_dump($number);
echo "<br><br>";

//Text variable
$word = "Word";
echo "This is a text variable: $word<br>";
var_dump($word);
echo "<br><br>";

//Boolean variable
$boolean = true;
echo "This is a boolean variable: $boolean<br>";
var_dump($boolean);
echo "<br><br>";

//Array variable
$colour = Array("Red", "Yellow", "Blue");
echo "This is an array variable: $colour[1]<br>";
var_dump($colour);
echo "<br><br>";

//Array variable with properties
$vegetables = Array("vegetable1"=>"lettuce", "vegetable2"=>"onion");
echo "This is an array variable with properties: $vegetables[vegetable1]<br>";
var_dump($vegetables);
echo "<br><br>";

//Object variable
$fruits = (object)["fruit1"=>"pear", "fruit2"=>"apple"];
echo "This is an object variable: $fruits->fruit1 y $fruits->fruit2<br>";
var_dump($fruits);
echo "<br><br>";
?>
