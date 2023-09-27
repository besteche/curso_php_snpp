<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 

class Automovil {
public $color;
public $motor;
public $marca;

public function obtener_color(){

    return $this ->color;
}
}

$auto1= new Automovil();
$auto1->color = 'verde';
$auto1->motor = '2.0';
$auto1->marca = 'Toyota';

$auto2= new Automovil();
$auto2->color = 'gris';
$auto2->motor = '1.5';
$auto2->marca = 'Ford';

$auto3= new Automovil();
$auto3->color = 'amarillo';
$auto3->motor = '2.5';
$auto3->marca = 'Hyundai';
?>
<h3> Imprimir colores de autos disponibles</h3>

<?php
   echo "Primer auto: ".$auto1->obtener_color();
   echo "<br> Segundo auto: ".$auto2->obtener_color();
   echo "<br> Tercer auto: ".$auto3 ->obtener_color(); 
    ?>

</body>
</html>