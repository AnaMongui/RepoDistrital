<?php
//Ejercicio uno Asistencia 
include 'Asistencia.html';

    $nota = null;
    $asis = null;
    $total_clases = 30;

    if (isset($_POST['operador'])) {
        $nota = $_POST['nota'];
        $asis = $_POST['asis'];

        if ($nota >= 1 && $asis >= ($total_clases*0.8)) {
            echo 'Aprobo';
        }
        else {
            echo 'No Aprobo';
        }
    }

?>