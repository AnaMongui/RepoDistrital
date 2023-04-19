<?php 
include 'punto_2.html'; 

$total = null; 

if (isset($_POST["operador"])){ 

    $total_correctas = $_POST["correctas"]; 
    $total_incorrectas = $_POST["incorrectas"]; 
    $total_blanco = $_POST["blanco"]; 

    $total_correctas_puntos = $total_correctas*4; 
    $total_incorrectas_puntos = $total_incorrectas*1; 
    $total_blanco_puntos = $total_blanco*0; 


    $total = $total_correctas_puntos-$total_incorrectas_puntos+$total_blanco_puntos; 
    echo 'la cantidad es:'.$total; 
} 

?>