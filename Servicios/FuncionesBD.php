<?php
    function conectarBD()
	{
		$servername = "NAVA-LAPTOP";
		$conexionInfo = array("DataBase"=>"MarvanMechanics", "UID"=>"sa", "PWD"=>"8550");
		$conexion = sqlsrv_connect($servername,$conexionInfo);
		return $conexion;
    }
    
    function consultaEspecializada($pIDServicio)
    {
        $conexion = conectarBD();
        $query = "SELECT Descripcion FROM Servicio WHERE idPaquete = ? "
        $statement = sqlsrv_querry($conexion,$query,$pIDServicio);        
    }
?>