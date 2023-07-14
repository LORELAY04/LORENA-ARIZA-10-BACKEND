<?php

include "./segundo_punto.html";

$edad = 0;
const constante_18 = 18;

if (isset($_POST['verificar'])) {
    $edad = $_POST['edad'];

    if ($edad >= constante_18) {
        echo "<h4>Es mayor de edad</h4>";
    }
    #else if (18> $edad && 0 < $edad) 
    else if ($edad < constante_18  && $edad > 0) {
        echo "<h4>Es menor de edad</h4>";
    }else{
        echo "<h4>No valido</h4>";
    }
}

?>