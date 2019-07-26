<?php

	function conectarBD()
	{
		$servername = "NAVA-LAPTOP";
		$conexionInfo = array("DataBase"=>"MarvanMecanics", "UID"=>"sa", "PWD"=>"8550");
		$conexion = sqlsrv_connect($servername,$conexionInfo);
		return $conexion;
	}

	function buscarCorreo($pCorreo)
	{
		$conexion = conectarBD();
		$select = "select correo from Cliente where correo = ?";
		$parametros= array($pCorreo);
		$resuaulSet = sqlsrv_query($conexion,$select,$parametros);
		try {
			while($arrayCorreo = sqlsrv_fetch_array($resuaulSet))
			{
				$correo = $arrayCorreo['correo'];
				
			}
			return $correo;
		} catch (Exception $e) {
			echo '<script> alert("Error de USUARIO");</script>' ;
			echo "<META HTTP-EQUIV = 'REFRESH' CONTENT='0 ; URL= LoginOmar/Login.html'>";
		}
	}

	function validarUsuario($pCorreo)
	{
		$conexion = conectarBD();
		$select = "select Contrasena from Cliente where Correo = ?";
		$parametros =array($pCorreo);
		$statement = sqlsrv_query($conexion,$select,$parametros);
		try {
			while ($arrayUsuario = sqlsrv_fetch_array($statement)) {
				$pass=$arrayUsuario['Contrasena'];
			}
			return $pass;
		} catch (Exception $e) {
			echo '<script> alert("Fatal Error");</script>' ;
			echo "<META HTTP-EQUIV = 'REFRESH' CONTENT='0 ; URL= LoginOmar/Login.html'>";
		}
        
	}

?>

