<?php 
include 'conexion.php';

$sql= "select *
from cancion where nickname like 'moios'";

$sql_genero = "select * from genero;";
$generos= $conexion->query($sql_genero);

$resultado= $conexion->query($sql);

?>

<h3>Lista de canciones</h3>
<table class= "table table-striped">

    <?php
        if($resultado-> num_rows > 0){
            while ($fila = $resultado->fetch_assoc()){
                echo "<tr>";
                echo "<td>". $fila ['AUTOR'] . "</td>" ;
                echo "<td>". $fila ['NOMBRE'] . "</td>" ;
                echo "<td>". $fila ["NICKNAME"] . "</td>" ;
                echo "<td>". $fila ["GENERO_ID"] . "</td>" ;
            }
        }else{
            echo "No tienes una cancion aun";
        }


?>
</table>

<div class= "col-sm-4">

<h4>Agrega la cancion</h4>
<form method="post" action="controladorcancion.php">
<input type="text" name="AUTOR" placeholder="Autor" class="form-control">
<input type="text" name="NOMBRE" placeholder="Titulo" class="form-control">
<select name="GENERO_ID">
    
<?php
        if($generos-> num_rows > 0){
            while ($fila = $generos->fetch_assoc()){
                echo "<option value='".$fila ['ID']."'>".$fila ['DESCRIPCION']."</option>";
            }
        }

?>
</select>
<input type="submit" value="Agregar cancion" class="btn btn-outline-dark">
</form>
</div>