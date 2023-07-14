<?php


include "./cuarto_punto.html";

$edad = 0;
const constante_18 = 18;
define("constante0","0");


if (isset($_POST['verificar'])) {

    $fecha_nacimiento = new DateTime($_POST['fecha_nacimiento']);

    $date2 = new DateTime(date("y-m-d"));


    $fecha_actual = $fecha_nacimiento->diff($date2);


    $edad_actual = $fecha_actual->y;
    $edad_meses = $fecha_actual->m;
    $edad_dias = $fecha_actual->d;


        if ($edad_actual >= constante_18) {
                echo "<h4>Es mayor de edad, dado que tiene $edad_actual años </h4>";
        }
        #else if (18> $edad && 0 < $edad)
        elseif ($edad_actual < constante_18  && $edad_actual > constante0) {
                echo "<h4>Es menor de edad, dado que tiene $edad_actual años </h4>";
        }else {
                echo "<h4>No valido</h4>";
        }
                echo  "<h3> Usted Tiene : $edad_actual años<br> 
                         Usted Tiene : $edad_meses meses<br> 
                         Usted Tiene : $edad_dias dias</h3>";
                
        }
   
?>
