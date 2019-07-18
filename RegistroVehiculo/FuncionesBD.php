<?php

	function conectarBD()
	{
		$servername = "NAVA-LAPTOP";
		$conexionInfo = array("DataBase"=>"MarvanMechanics", "UID"=>"sa", "PWD"=>"8550");
		$conexion = sqlsrv_connect($servername,$conexionInfo);
		return $conexion;
	}

	function insertarVehiculo($pSerie,$pModelo,$pAnio,$pMarca,$pVersion,$pPlaca)
	{
		$conexion = conectarBD();
		$insert = "insert into vehiculo values (?,?,?,?,?,?)";
		$parametros=array($pSerie,$pModelo,$pAnio,$pMarca,$pVersion,$pPlaca);
		$statement = sqlsrv_query($conexion,$insert,$parametros);
		try {

			if ($statement) 
			{
				echo '<script> alert("Registro realizado");</script>' ;
				echo "<META HTTP-EQUIV = 'REFRESH' CONTENT='0 ; URL= ../Login/Index.html'>";
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

	function validarVehiculo($pSerie)
	{
		$conexion = conectarBD();
		$select = "select Serie from vehiculo where serie = ?";
		$parametros =array($pCorreo);
		$statement = sqlsrv_query($conexion,$select,$parametros);
		try {
			while ($arrayCorreo = sqlsrv_fetch_array($statement)) {
				$serie = $arrayCorreo['Serie'];
			}
		} catch (Exception $e) {
			echo '<script> alert("Fatal Error");</script>' ;
			echo "<META HTTP-EQUIV = 'REFRESH' CONTENT='0 ; URL= Registro.html'>";
		}
        return $serie;
	}

?>