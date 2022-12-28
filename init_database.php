<?php
include 'connect.php';

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$mail = $_POST['mail'];
$tel = $_POST['tel'];
$empresa = $_POST['empresa'];
$rubro = $_POST['rubro'];
$p1 = $_POST['p1'];

if (isset($_SESSION['id'])) {
  // El usuario ya tiene una sesión abierta, actualizar los datos
  $id = $_SESSION['id'];
  $sql = "UPDATE respuestas SET nombre = '$nombre', mail = '$mail', tel = '$tel', empresa = '$empresa', rubro = '$rubro', p1 = '$p1' WHERE id = '$id'";
} else {
  // El usuario no tiene una sesión abierta, insertar un nuevo registro
  $sql = "INSERT INTO respuestas (nombre, mail, tel, empresa, rubro, p1) VALUES ('$nombre', '$mail', '$tel', '$empresa', '$rubro', '$p1')";
}

// Ejecutar consulta
if (mysqli_query($mysqli, $sql)) {
  if (!isset($_SESSION['id'])) {
    // Si es un nuevo registro, guardar el ID en la sesión
    $_SESSION['id'] = mysqli_insert_id($mysqli);
  }
  echo "Registro actualizado correctamente";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
}

// Cerrar conexión
mysqli_close($mysqli);
?>
