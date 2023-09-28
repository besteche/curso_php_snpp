<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$var = '';

// Esto evaluará a TRUE así que el texto se imprimirá.
if (isset($var)) {
    echo "Esta variable está definida, así que se imprimirá";
}

// En los siguientes ejemplo usaremos var_dump para imprimir
// el valor devuelto por isset().

$a = "prueba";
$b = "otraprueba";

var_dump(isset($a));      // TRUE
var_dump(isset($a, $b)); // TRUE

unset ($a);

var_dump(isset($a));     // FALSE
var_dump(isset($a, $b)); // FALSE

$foo = NULL;
var_dump(isset($foo));   // FALSE

?>


<?php
$var1 = 0;

// Evaluates to true because $var is empty
if (empty($var1)) {
    echo '$var is either 0, empty, or not set at all';
}

// Evaluates as true because $var is set
if (isset($var1)) {
    echo '$var is set even though it is empty';
}
?>
</body>
</html>