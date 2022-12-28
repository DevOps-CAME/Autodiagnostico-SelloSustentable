<?php
$mysqli = new mysqli("came.org.ar","came_sellosustentable","72A96F933F70F0E5EF","came_sellosustentable");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
// Establecer tiempo de expiración de la cookie de sesión en 2 horas
session_set_cookie_params(7200);
session_start();