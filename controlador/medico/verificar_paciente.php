<?php
    require '../../modelo/modelo_medico.php';
    $MM = new Modelo_Medico();

    $txt_apellido = htmlspecialchars($_POST['txt_apellido'],ENT_QUOTES,'UTF-8');
    $txt_dni = htmlspecialchars($_POST['txt_dni'],ENT_QUOTES,'UTF-8');
   
    $consulta = $MM->VerificarPaciente($txt_apellido,$txt_dni);
    $data = json_encode($consulta);
    if(count($consulta)>0){
        echo $data;
    }else{
        echo 0;
    }

?>