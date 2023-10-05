<?php
if(isset($_POST)){
    $autor=$_POST['AUTOR'];
    $titulo=$_POST['NOMBRE'];
    $gen_id=$_POST['GENERO_ID'];
    $nickname='moios';
}
?>

<?php

include 'conexion.php';
$sql_insertar = "Insert into cancion values (default, '$autor','$titulo','$nickname',$gen_id);";
$conexion-> query($sql_insertar);
header('Location: cancion.php');
exit;
?>
