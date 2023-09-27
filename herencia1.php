<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
class Persona {
    public $telefono;
    public $nombre;

    public function __construct($nomb, $tel) {
        $this->nombre = $nomb;
        $this->telefono = $tel;
    }

    public function obtener_datos(){
        return "Nombre: " . $this->nombre . ", Teléfono: " . $this->telefono;
    }
}
// Crear dos objetos de la clase Persona
$persona1 = new Persona("Juan ", "123-456-7890");
$persona2 = new Persona("María ", "987-654-3210");

// Imprimir los datos de los objetos
echo "<br>Datos de persona1: " . $persona1->obtener_datos() . "\n";
echo "<br>Datos de persona2: " . $persona2->obtener_datos() . "\n";
?>

<?php
class Alumno extends Persona {
    private $grado;
    private $turno;

    public function __construct($nomb, $telefono, $grado, $turno){
        parent::__construct($nomb, $telefono); // Corregir aquí para pasar $telefono
        $this->grado = $grado;
        $this->turno = $turno;
    }

    public function obtener_datos(){
        return parent::obtener_datos() . ", Grado: " . $this->grado . ", Turno: " . $this->turno;
    }

    public function get_grado(){
        return $this->grado;
    }
    public function get_turno(){
        return $this->turno;
    }
}
?>
<h3>Crear un objeto de la clase Alumno</h3>
<?php 
$alumno1 = new Alumno("Camila", "0961123466", "Tercero - Nivel Medio", "Tarde"); 
?>
<h3>Imprimir sus datos con foreach</h3>
<?php 
// Crear un arreglo con los datos del alumno
$datosAlumno = array(
    "nombre" => $alumno1->nombre,
    "telefono" => $alumno1->telefono,
    "grado" => $alumno1->get_grado(),
    "turno" => $alumno1->get_turno()
);

// Iterar sobre el arreglo e imprimir los datos
foreach ($datosAlumno as $clave => $valor) {
    echo $clave . ": " . $valor . "<br>";
}
?>

</body>
</html>
