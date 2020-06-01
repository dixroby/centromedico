<?php
    require '../../modelo/modelo_medico.php';
    $MM = new Modelo_Medico();

    $consulta = $MM->listar_dni();
    echo json_encode($consulta);
?>