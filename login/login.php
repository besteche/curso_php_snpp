<?php session_start ();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 
if (isset($_SESSION['Nombre'])) {
    echo "<p>Bienvenido: </p>". $_SESSION['Nombre'] . "!: ";
    echo "<p> <a href= 'logout.php'>Cerrar sesion  </a></p>";
    echo "<br><p> <a href='dashboard.php'>Ir al panel de control </a></p>";
}
?>

<h2>Acceder </h2>
<form action="dashboard.php" method= "POST">
<p> <input type="text" placeholder= "Usuario: " name="Nombre" required autofocus/></p>
<p> <input type="submit" value="Acceder"/></p>
</form>


</body>
</html>