<?php
    $conexion= new mysqli('localhost', 'id20774831_sim', 'ARTE-SIMs1', 'id20774831_arte');
    if($conexion){
        echo "CONEXION EXITOSA";
    }else {
        echo "NO FUNCIONO LA CONEXION";
    }
?>