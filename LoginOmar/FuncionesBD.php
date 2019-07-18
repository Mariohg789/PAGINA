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
/*
	function consultaTodo()
	{
		$conex = conectarBD();
		$select = "select * from Cliente";
		$reseaultSet = sqlsrv_query($conex,$select);
		try {


		echo "<table>
						<tr>
							<th>Id</th>
							<th>Nombre</th>
							<th>Apellido</th>
							<th>Contrasena</th>
							<th>Correo</th>
							<th>Telefono</th>
							<th>Estado</th>
							<th>Eliminar</th>
						</tr>
						
				";

				while ($arrayFilas = sqlsrv_fetch_array($reseaultSet)) {
					echo "<tr>
							<td> ".$arrayFilas['Id']."</td>
							<td> ".$arrayFilas['Nombre']."</td>
							<td> ".$arrayFilas['ApellidoP']."</td>
							<td> ".$arrayFilas['Contrasena']."</td>
							<td> ".$arrayFilas['Correo']."</td>
							<td> ".$arrayFilas['Telefono']."</td>
							<td> ".$arrayFilas['Estado']."</td>
							<td><a href='../Eliminar/Eliminar.php?id=".$arrayFilas['Id']."'>Eliminar</a></td>
					</tr>";
				}
				echo "</table>";				
				
				
			}
		catch (Exception $e) {
			echo '<script> alert("Fatal Error");</script>' ;
			echo "<META HTTP-EQUIV = 'REFRESH' CONTENT='2 ; URL= index.html'>";
		}
	}
*/
?>

45621