<?php
// contador_visitas.php
header('Content-Type: application/json; charset=utf-8');

// Archivo donde se guardará el número de visitas
$archivo = __DIR__ . '/visitas_total.txt';

// Si no existe, empezamos en 0
if (!file_exists($archivo)) {
    file_put_contents($archivo, "0");
}

$contador = (int)file_get_contents($archivo);
$contador++; // sumamos una visita
file_put_contents($archivo, $contador);

// Devolvemos el valor en JSON
echo json_encode(['value' => $contador]);
