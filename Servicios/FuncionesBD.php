<?php
    function conectarBD()
	{
		$servername = "NAVA-LAPTOP";
		$conexionInfo = array("DataBase"=>"MarvanMecanics", "UID"=>"sa", "PWD"=>"8550");
		$conexion = sqlsrv_connect($servername,$conexionInfo);
		return $conexion;
    }
    
    /*function consultaEspecializada($pIDServicio)
    {
        $conexion = conectarBD();
        $query = "SELECT Descripcion FROM Servicio WHERE idPaquete = ? ";
        $parametros = array($pIDServicio);
        $statement = sqlsrv_query($conexion,$query,$parametros); 
        try {
            return $statement; 
        } catch (Exception $e) {
            
        }
    }*/
?>