<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $dia[0]= "domingo";
    $dia[1]= "lunes";
    $dia[2]= "martes";
    $dia[3]= "miercoles";
    $dia[4]= "jueves";
    $dia[5]= "viernes";
    $dia[6]= "sabado";

    $mes = array("enero", "febrero", "marzo");
    //mostrar viernes
    echo "Dia: ", $dia[5] ;
    echo "<br>";
    // mostrar febrero
   echo "Mes: ", $mes[1];
   echo "<br>";
    ?>
    <?php 
    $autos= array ("Volvo","BMW","Toyota");
    $arraylongitud = count($autos);
    for ($i=0; $i < $arraylongitud ; $i++) {
        echo $autos[$i]; 
        echo "<br>";
    }
    ?>

    <?php
    $edades = array("Moises" => "33", "Camila" => "25", "Samanta" => "17");
    echo "Camila tiene ". $edades['Camila']. " años.";
   
    foreach ($edades as $i => $valor){

        echo "Clave=". $i . ", valor " . $valor;
        echo "<br>";
    }
    ?>

    <?php 
    $productos = array (
        array("Heladera", 2500000, 18),
        array("Microonda", 1500000, 9),
        array("Cocina",590000,21),
        array("Licuadora",450000,15),
        array ("Mixer",260000,5),
        array ("Ventilador",150000,15)
    );
    //Imprimir todos los valores
    foreach ($productos as $InnerArray){
        foreach ($InnerArray as $element){
            echo $element. " ";
            echo "<br>";
        }
    }
    

    //Imprimir productos con valor <=1000000
    foreach ($productos as $InnerArray) {
        foreach ($InnerArray as $element) {
            if (is_numeric($element) && $element <= 1000000) {
                echo $element . " ";
            }
        }
        echo "<br>";
    }
    ?>

<?php 
//Math.php
echo pi(); //Valor de pi
echo "<br>";
echo min(0,150,20,10,-64,-246); // Menor valor
echo "<br>";
echo max(0,150,20,10,-64,-246); // mayor valor
echo "<br>";
echo(abs(-6.54)); //Valor abs
echo "<br>";
echo sqrt(16);
echo "<br>";
echo round(0.66);
echo "<br>";
echo round(0.43);
echo "<br>";
echo rand();
echo "<br>";
echo rand(10,150);
echo "<br>";






?>
</body>
</html>