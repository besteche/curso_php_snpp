<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Sesion abierta</h2>
    <p>
    <?php 
    if (isset($_POST['Nombre'])) {
        $_SESSION['Nombre']=$_POST['Nombre'];
        echo "Bienvenido, :<b> ". $_POST['Nombre']. "</b>";
    }
    else {
        if (isset($_SESSION['Nombre'])) {
            echo "Has iniciado sesion como: ". $_SESSION['Nombre'];
        }
        else{
            echo "Acceso restringido";
        }
    }
    ?>
    </p>
    <br>
    <p> <a href="login.php"> Ir a la pagina principal</a></p>
    <br>
    <p><a href="logout.php">Cerrar sesion</a></p>
</body>
</html>