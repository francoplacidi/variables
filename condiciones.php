<?php

//Condiciones - if
$a = 5;
$b = 10;

if($a > $b){
    echo $a." es mayor que ".$b;
}
else if($a == $b){
    echo $a." es igual que ".$b;
}
else{
    echo $a." es menor que ".$b;
}

echo "<br><br>";

//Switch
$dia = "domingo";
switch($dia){
    case 'sabado':
    echo "Voy a estudiar";
    break;

    case 'viernes':
    echo "Me voy de joda";
    break;

    case 'domingo':
    echo "Voy a descansar";
    break;

    default: echo "Voy a la universidad";
}

echo "<br><br>";

//While
$n = 1;
while($n < 5){
    echo $n;
    $n++;
}

echo "<br><br>";

//DoWhile
$p = 1;
do{
    echo $p;
    $p++;
}while($p <= 5);

echo "<br><br>";

//For
for($i = 0; $i <= 5; $i++){
    echo $i."<br>";
}
?>