<?php

	function conectarBD()
	{
		$servername = "NAVA-LAPTOP";
		$conexionInfo = array("DataBase"=>"MarvanMechanics", "UID"=>"sa", "PWD"=>"8550");
		$conexion = sqlsrv_connect($servername,$conexionInfo);
		return $conexion;
	}

	function actualizarEliminarUsuario($pCorreo,$pEstado)
	{

		$conexion = conectarBD();
		$insert = "update Cliente set Estado = ? where Correo = ?";
		$parametros = array($pEstado,$pCorreo);
		$statement = sqlsrv_query($conexion,$insert,$parametros);
		try {

			if ($statement) 
			{
				echo '<script> alert("Usuario Eliminado");</script>' ;
				echo "<META HTTP-EQUIV = 'REFRESH' CONTENT='0 ; URL= ../Login/Index.html'>";
			}
			else
			{
				echo '<script> alert("Error");</script>' ;
				echo "<META HTTP-EQUIV = 'REFRESH' CONTENT='0 ; URL= ../Login/Index.html'>"; 
			}
			
		} catch (Exception $e) {
			echo '<script> alert("Fatal Error");</script>' ;
			echo "<META HTTP-EQUIV = 'REFRESH' CONTENT='0 ; URL= ../Login/Index.html'>";
		}
		
		return 1;
	}

	function BuscarId($pId)
	{
		$conex = conectarBD();
		$select = "select Correo from Cliente where Id = ?";
		$parametros = array($pId);
		$statement = sqlsrv_query($conex,$select,$parametros);
		while ($consulta=sqlsrv_fetch_array($statement)) {
			$nombre = $consulta['Correo'];
		}
		return $nombre;
	}
?>