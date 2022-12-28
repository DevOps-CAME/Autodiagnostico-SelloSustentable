<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respuestas - Cuestionario de autodiagnóstico - Sello CAME Sustentable</title>
    <style>
        .styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}
.styled-table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
}
.styled-table th,
.styled-table td {
    padding: 12px 15px;
}
.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}
    </style>
</head>
<body>
<?php
include 'connect.php';

// Obtener los datos de la base de datos
$result = mysqli_query($mysqli, "SELECT * FROM respuestas");

// Crear la tabla HTML
echo "<table border='1' class='styled-table'>";
echo "<tr>";
echo "<th>Hora</th>";
echo "<th>Nombre</th>";
echo "<th>Mail</th>";
echo "<th>Teléfono</th>";
echo "<th>Empresa</th>";
echo "<th>Rubro</th>";
echo "<th>Pregunta 1</th>";
echo "<th>Pregunta 2</th>";
echo "<th>Pregunta 3</th>";
echo "<th>Pregunta 4</th>";
echo "<th>Pregunta 5</th>";
echo "<th>Pregunta 6</th>";
echo "<th>Pregunta 7</th>";
echo "<th>Pregunta 8</th>";
echo "<th>Pregunta 9</th>";
echo "<th>Pregunta 10</th>";
echo "<th>Pregunta 11</th>";
echo "<th>Pregunta 12</th>";
echo "<th>Pregunta 13</th>";
echo "<th>Pregunta 14</th>";
echo "<th>Pregunta 15</th>";
echo "<th>Respuesta</th>";
echo "</tr>";

// Recorrer los datos y agregarlos a la tabla
while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['hora'] . "</td>";
    echo "<td>" . $row['nombre'] . "</td>";
    echo "<td>" . $row['mail'] . "</td>";
    echo "<td>" . $row['tel'] . "</td>";
    echo "<td>" . $row['empresa'] . "</td>";
    echo "<td>" . $row['rubro'] . "</td>";
    echo "<td>" . ($row['p1'] == 1 ? "Sí" : "No") . "</td>";
    echo "<td>" . ($row['p2'] == 1 ? "Sí" : "No") . "</td>";
    echo "<td>" . ($row['p3'] == 1 ? "Sí" : "No") . "</td>";
    echo "<td>" . ($row['p4'] == 1 ? "Sí" : "No") . "</td>";
    echo "<td>" . ($row['p5'] == 1 ? "Sí" : "No") . "</td>";
    echo "<td>" . ($row['p6'] == 1 ? "Sí" : "No") . "</td>";
    echo "<td>" . ($row['p7'] == 1 ? "Sí" : "No") . "</td>";
    echo "<td>" . ($row['p8'] == 1 ? "Sí" : "No") . "</td>";
    echo "<td>" . ($row['p9'] == 1 ? "Sí" : "No") . "</td>";
    echo "<td>" . ($row['p10'] == 1 ? "Sí" : "No") . "</td>";
    echo "<td>" . ($row['p11'] == 1 ? "Sí" : "No") . "</td>";
    echo "<td>" . ($row['p12'] == 1 ? "Sí" : "No") . "</td>";
    echo "<td>" . ($row['p13'] == 1 ? "Sí" : "No") . "</td>";
    echo "<td>" . ($row['p14'] == 1 ? "Sí" : "No") . "</td>";
    echo "<td>" . ($row['p15'] == 1 ? "Sí" : "No") . "</td>";
    echo "<td>" . $row['respuesta'] . "</td>";
    echo "</tr>";
}

echo "</table>";
?>
    
</body>
</html>
