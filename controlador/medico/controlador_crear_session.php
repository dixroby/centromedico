
<?php
$idmedico = $_POST['id'];
//$medico_nombre = $_POST['medico_nombre'];
//$medico_apepat = $_POST['medico_apepat'];
//$medico_apemat = $_POST['medico_apemat'];
//$espeid = $_POST['especialidad_id'];
//$especialidad = $_POST['especialidad_nombre'];

session_start();

//$_SESSION['MEDICO_ID']=$idmedico;
//$_SESSION['MEDICO_NOMBRE']=$medico_nombre;
//$_SESSION['MEDICO_APEPAT']=$medico_apepat;
//$_SESSION['MEDICO_APEMAT']=$medico_apemat;
//$_SESSION['ESPECIALIDAD_ID']=$espeid;
//$_SESSION['ESPECIALIDAD_NOMBRE']=$especialidad;

header('Location: ../../vista/pas/especialidad.php');
?>