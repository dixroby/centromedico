<?php
    require '../../modelo/modelo_medico.php';
    $MM = new Modelo_Medico();

    $medicoid = htmlspecialchars($_POST['medicoid'],ENT_QUOTES,'UTF-8');
    $txt_apellido = htmlspecialchars($_POST['txt_apellido'],ENT_QUOTES,'UTF-8');
    $apmat = htmlspecialchars($_POST['apmat'],ENT_QUOTES,'UTF-8');

    $consulta = $MM->Registrar_medico($nombre,$appat,$apmat,$direccion,$telefono,$sexo,$dni,$colegio,$especialidad,$estatus);
    echo $consulta;
