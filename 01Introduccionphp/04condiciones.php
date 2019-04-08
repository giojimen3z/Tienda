<?php

#condiciones 

$a = 15;
$b = 10;

if ($a > $b){

    echo "$a es mayor que $b";
}
elseif ($a==$b){

    echo "$a es igual que $b";

}
else {

    echo "$a es menor que $b";

}
echo "<br><br>";

#switch
$dia = "lunes";
switch($dia){

    case 'sabado':
          echo "voy a estudiar php" ; 
    break;
    case 'viernes':
          echo "voy a la fiesta" ; 
    break;
    case 'domingo':
            echo "voy a descansar" ; 
    break;


    default: echo "voy a la universidad";


}

#Ciclo WHile
$n = 1;

echo "<br><br>";

while ($n <= 5){

    echo "$n <br>";

    $n++;

}

#ciclo dowhile

$cic = 1;

do {

    echo "$cic <br>";

    $cic++;

}while($cic <5);


#ciclo for

for ($i=0;$i<5;$i++){

    echo "$i <br>";

}
?>

