<?php
    class Modelo_Especialidad{
        private $conexion;
        function __construct(){
            require_once 'modelo_conexion.php';
            $this->conexion = new conexion();
            $this->conexion->conectar();
        }

        function listar_Especialidad(){
            $sql = "call SP_LISTAR_ESPECIALIDAD()";
			$arreglo = array();
			if ($consulta = $this->conexion->conexion->query($sql)) {
				while ($consulta_VU = mysqli_fetch_assoc($consulta)) {
                    $arreglo["data"][]=$consulta_VU;
				}
				return $arreglo;
				$this->conexion->cerrar();
			}
        }

        function Registrar_Especialidad($nombre,$status){
            $sql = "call SP_REGISTRAR_ESPECIALIDAD('$nombre','$status')";
			if ($consulta = $this->conexion->conexion->query($sql)) {
				if ($row = mysqli_fetch_array($consulta)) {
                        return $id= trim($row[0]); 
				}
				$this->conexion->cerrar();
			}
        }
        
        function Modificar_Datos_Especialidad($id,$nombre,$estatus){
            $sql = "call SP_MODIFICAR_DATOS_ESPECIALIDAD('$id','$nombre','$estatus')";
			if ($consulta = $this->conexion->conexion->query($sql)) {   
				return 1;
				
			}else{
				return 0;
			}
        }
		
    }
