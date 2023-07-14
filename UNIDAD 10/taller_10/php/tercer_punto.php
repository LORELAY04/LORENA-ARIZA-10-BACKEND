<?php

include "./tercer_punto.html";

$edad = 0;

if (isset($_GET['verificar'])) {
    $nombre = $_GET['nombre'];
    $apellido = $_GET['apellido'];
    $cedula = $_GET['cedula'];

    echo "<h5>El Nombre Registrado Es: $nombre<br>
            El Apellido Registrado Es: $apellido<br>
            El Número de Documento Registrado Es: $cedula</h5>";
}

?>