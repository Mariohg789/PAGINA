<?php

	function conectarBD()
	{
		$servername = "NAVA-LAPTOP";
		$conexionInfo = array("DataBase"=>"MarvanMechanics", "UID"=>"sa", "PWD"=>"8550");
		$conexion = sqlsrv_connect($servername,$conexionInfo);
		return $conexion;
	}

	function insertarUsuario($pNombre,$pApellido,$pContrasena,$pDireccion,$pCorreo,$pTelefono,$pEstado,$pEstatus)
	{
		$conexion = conectarBD();
		$insert = "insert into Cliente values (?,?,?,?,?,?,?,?)";
		$parametros=array($pNombre,$pApellido,$pContrasena,$pDireccion,$pCorreo,$pTelefono,$pEstado,$pstatus);
		$statement = sqlsrv_query($conexion,$insert,$parametros);
		try {

			if ($statement) 
			{
				echo '<script> alert("Registro realizado");</script>' ;
				echo "<META HTTP-EQUIV = 'REFRESH' CONTENT='0 ; URL= ../LoginOmar/Login.html'>";
			}
			else
			{
				echo '<script> alert("Error");</script>' ;
				echo "<META HTTP-EQUIV = 'REFRESH' CONTENT='2 ; URL= Registro.html'>"; 
			}
			
		} catch (Exception $e) {
			echo '<script> alert("Fatal Error");</script>' ;
			echo "<META HTTP-EQUIV = 'REFRESH' CONTENT='2 ; URL= Registro.html'>";
		}
		
		return 1;
	}

	function validarUsuarioCorreo($pCorreo)
	{
		$conexion = conectarBD();
		$select = "select Correo from Cliente where Correo = ?";
		$parametros =array($pCorreo);
		$statement = sqlsrv_query($conexion,$select,$parametros);
		try {
			while ($arrayCorreo = sqlsrv_fetch_array($statement)) {
				$correo = $arrayCorreo['Correo'];
			}
		} catch (Exception $e) {
			echo '<script> alert("Fatal Error");</script>' ;
			echo "<META HTTP-EQUIV = 'REFRESH' CONTENT='0 ; URL= Registro.html'>";
		}
        return $correo;
	}

?>