<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $mysqli= new mysqli ("localhost","superusuario","12345","bd_lista_benjamin", 3306);
    if ($mysqli->connect_errno){
        echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ")". $mysqli-> connect_errno;
    }
    echo $mysqli->host_info. "\n";
    ?>
</body>
</html>