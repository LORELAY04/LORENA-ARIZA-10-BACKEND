<?php

    // include "./mi_proyecto.sql";

    $host = 'localhost'; 
    $usuario = 'root';
    $contraseña =''; // CLAVE POR DEFECTO INSTALADA
    $basedatos = 'mi_proyecto';

    $conexion = new mysqli($host,$usuario,$contraseña,$basedatos);
    $sql = file_get_contents('./mi_proyecto.sql');


    if($conexion->connect_errno) {
        echo"fallos en conexión"; 
        exit();
    } else {
        echo"Succesful connection!"; 
        // $conexion->multi_query($sql);
        // echo"Script executed"; 

    };

    $consulta = "SELECT * FROM usuarios";

    $result =$conexion->query($consulta);
    
    if( $result ) { // ->num_rows > 0
        while($fila =$result->fetch_assoc()){
        echo "ID: " . $fila['id'] . "<br>";
        echo "Nombre: " . $fila['nombre'] . "<br>";
        echo "Apellido: " . $fila['apellido'] . "<br>";
        echo "Cédula: " . $fila['cedula'] . "<br><br>";
        }
    }else {
        echo "error en la consulta: ".$conexion->error;
    }

    // Cerrar la conexión
    $conexion->close();
?>
