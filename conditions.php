<?php

//Conditions - if
$a = 5;
$b = 10;

if($a > $b){
    echo $a." is greater than ".$b;
}
else if($a == $b){
    echo $a." is the same as ".$b;
}
else{
    echo $a." is less than ".$b;
}

echo "<br><br>";

//Switch
$day = "sunday";
switch($day){
    case 'sathurday':
    echo "Am going to study";
    break;

    case 'friday':
    echo "I am going to party";
    break;

    case 'sunday':
    echo "I am going to rest";
    break;

    default: echo "I go to college";
}

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


//For
for($i = 0; $i <= 5; $i++){
    echo $i."<br>";
}
?>
