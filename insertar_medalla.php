<?php
// Conexión a la base de datos
$conn = new mysqli('localhost', 'root', '', 'olimpicos');

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Recibir los datos del formulario
$pais = $_POST['pais'];
$oro = $_POST['oro'];
$plata = $_POST['plata'];
$bronce = $_POST['bronce'];

// Insertar los datos en la base de datos
$sql = "INSERT INTO medallas (pais, oro, plata, bronce) VALUES ('$pais', $oro, $plata, $bronce)";

if ($conn->query($sql) === TRUE) {
    echo "Medalla registrada exitosamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

// Redireccionar a la página principal
header("Location: index.php");
exit();
?>