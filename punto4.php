<?php
include 'punto4.html';
if (isset($_POST['datos'])) {
    $a=1;
    $cant = $_POST['cantidad'];

    //Ejemplo ciclo while
    //while($a <=$cant){
    //    echo'Hola Mundo' .$a .'<br>' ;
    //    $a++;
    //}

    //Ejemplo ciclo for
    //for ($a=1; $a <= $cant; $a++){
    //    echo'Hola Mundo'.$a .'<br>';
    //}

    //Ejemplo DoWhile

    do {
        echo 'Hola Mundo' .$a . '<br>';
        $a++;
    } while ($a <= $cant );
}


?>
