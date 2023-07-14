<?php

include "./primer_punto.html"; 

$numero1 = null;
$numero2 = null;
$operacion = null;
$resultado = null;



if(isset($_POST['numero1']) and isset($_POST['numero2']) and isset($_POST['operacion'])){
   
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $operacion = $_POST['operacion'];

    switch($operacion){
        case"suma":
            $resultado = $numero1 + $numero2;
            break;
        case"resta":
            $resultado = $numero1 - $numero2;
            break;
        case"multiplicacion":
            $resultado = $numero1 * $numero2;
            break;
        case"division":
            $resultado = $numero1 / $numero2;
            break;
        case"raiz":
            $resultado = $numero1 ** (1/$numero2);
            break;
        case"logaritmo":
            $resultado =log($numero1,$numero2);
            break;
            // Se agrega 2 nuevas funciones de raiz y logartimo

        default:
            echo"seleccione una opcion valida";
    
    }
    echo  "<h3>El resultado de la operacion $operacion es $resultado</h3>";
   
}

?>
