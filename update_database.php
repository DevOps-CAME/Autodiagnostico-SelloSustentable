<?php
include 'connect.php';

// Obtener los datos del formulario
$id=  $_SESSION['id'];
$p2 = isset($_POST['p2']) ? $_POST['p2'] : NULL;
$p3 = isset($_POST['p3']) ? $_POST['p3'] : NULL;
$p4 = isset($_POST['p4']) ? $_POST['p4'] : NULL;
$p5 = isset($_POST['p5']) ? $_POST['p5'] : NULL;
$p6 = isset($_POST['p6']) ? $_POST['p6'] : NULL;
$p7 = isset($_POST['p7']) ? $_POST['p7'] : NULL;
$p8 = isset($_POST['p8']) ? $_POST['p8'] : NULL;
$p9 = isset($_POST['p9']) ? $_POST['p9'] : NULL;
$p10 = isset($_POST['p10']) ? $_POST['p10'] : NULL;
$p11 = isset($_POST['p11']) ? $_POST['p11'] : NULL;
$p12 = isset($_POST['p12']) ? $_POST['p12'] : NULL;
$p13 = isset($_POST['p13']) ? $_POST['p13'] : NULL;
$p14 = isset($_POST['p14']) ? $_POST['p14'] : NULL;
$p15 = isset($_POST['p15']) ? $_POST['p15'] : NULL;
$respuesta = isset($_POST['respuesta']) ? $_POST['respuesta'] : NULL;


// Crear consulta SQL para actualizar los datos
$sql = "UPDATE respuestas
SET p2 = '$p2', p3 = '$p3', p4 = '$p4', p5 = '$p5', p6 = '$p6', p7 = '$p7', p8 = '$p8', p9 = '$p9', p10 = '$p10', p11 = '$p11', p12 = '$p12', p13 = '$p13', p14 = '$p14', p15 = '$p15', respuesta = '$respuesta'
WHERE id = '$id'";

// Ejecutar consulta
if (mysqli_query($mysqli, $sql)) {
  echo "Registro actualizado correctamente";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
}

// Cerrar conexión
mysqli_close($mysqli);