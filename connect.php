<?php
$mysqli = new mysqli("HOST","USUARIO","CONTRASEÑA","TABLA");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
// Establecer tiempo de expiración de la cookie de sesión en 2 horas
session_set_cookie_params(7200);
session_start();
