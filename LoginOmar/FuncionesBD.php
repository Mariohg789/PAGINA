<?php

	function conectarBD()
	{
		$servername = "NAVA-LAPTOP";
		$conexionInfo = array("DataBase"=>"MarvanMechanics", "UID"=>"sa", "PWD"=>"8550");
		$conexion = sqlsrv_connect($servername,$conexionInfo);
		return $conexion;
	}


	function validarUsuario($pCorreo)
	{
		$conexion = conectarBD();
		$select = "select Correo, Contrasena from Cliente where Correo = ?";
		$parametros =array($pCorreo);
		$statement = sqlsrv_query($conexion,$select,$parametros);
		try {
			while ($arrayUsuario = sqlsrv_fetch_array($statement)) {
				$correo=$arrayUsuario['Correo'];
				$pass=$arrayUsuario['Contrasena'];
			}
		} catch (Exception $e) {
			echo '<script> alert("Fatal Error");</script>' ;
			echo "<META HTTP-EQUIV = 'REFRESH' CONTENT='0 ; URL= LoginOmar/Login.html'>";
		}
        return array($correo,$pass);
	}

?>
