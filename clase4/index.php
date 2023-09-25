<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php

$a=8;
$b=3;
echo "<h3> Operaciones aritmeticas</h3>";
echo "a= " .$a. "y b= ".$b;
echo "<br> La suma de a+b es " .($a+$b);
echo "<br> La resta de a-b es ".($a-$b);
echo "<br> La division de a y b es ".($a/$b);
echo "<br> La multiplicacion de a y b es ".($a*$b);
echo "<br> A elevada a la b es  ".($a**$b);
echo "<br> El resto de a y b es ".($a%$b);
?>

<?php
$x=8;
$y=3;
echo "<h3> Operadores de comparacion. Vacio = false 1 = true </h3>";
echo "x= ".$x. ", y= ".$y;
echo "<br> Es x=y? " . ($x== $y);
echo "<br> Es x !=y?" . ($x!=$y);
echo "<br> Es x < y?" . ($x<$y);
echo "<br> Es x >y?" . ($x>$y);
echo "<br> Es x >=y?" . ($x>=$y);
echo "<br> Es x <=y?" . ($x<=$y);
?>
    
<?php
echo "<h3>Operadores logicos Y, O, negacion  </h3>";

echo "<br>A es igual a B y X es mayor a Y ". ($a==$b && $x>$y);
echo "<br>A es igual a B o X es igual a Y ". ($a==$b || $x>$y);
echo "<br>Negar (B es igual a X)". !($b==$x);
?>


<?php 
$numero_1=rand(1,15);
$numero_2=rand(1,20);

if ($numero_1 > $numero_2) {
    echo "El numero mayor es n1 que es igual a ".$numero_1;
    
}
else {
    echo "El numero mayor es n2 que es igual a ". $numero_2;
}
echo "<br> <p> Ejemplo creado con numeros aleatorios ↑↑↑↓↓↓</p>";
?>

<?php

$edad=rand (1,20);

if ($edad >= 18 && $edad <= 80) {
    echo "Eres mayor de edad (entre 18 y 80 años)";
} else if ($edad >= 1 && $edad <= 17) {
    echo "Eres menor de edad (entre 1 y 17 años)";
} else {
    echo "Edad fuera de los rangos especificados";
}
echo "<br>";
?>

<?php 

for ($i = 1; $i <= 10; $i++) {
    $result = 9 * $i;
    echo "9 x $i = $result <br>";
}
?>

<?php 
for ($z=0; $z <=10 ; $z++) { 
  if ($z%2==0) {
    echo "<p class= estilo_par>$z </p>";
  } 
  else{
    echo "<p class= estilo_impar>$z </p>";
  }
}
?>

<?php
$temperatura =0;
while ($temperatura <= 10) {
    echo "La temperatura es: $temperatura <br>";
    $temperatura++;
}
?>
</body>
</html>