<!DOCTYPE html>

<html>
	<head>...</head>
	<BODY>
		<?php
			require 'FuncionesBD.php';
			if (isset($_POST['btnAgregarVehiculo'])) {
			$numeroSerie = $_POST['txtNumeroSerie'];
			$modelo = $_POST['txtModelo'];
			$anio = $_POST['txtAnio'];
			$marca = $_POST['txtMarca'];
			$version = $_POST['txtVersion'];
			$placas = $_POST['txtPlacas'];
			

			if (validarVehiculo($numeroSerie) != $numeroSerie) 
			{
				insertarUsuario($numeroSerie,$modelo,$anio,$marca,$version,$placas);
			}
			else
			{
				echo '<script> alert("Este Vehiculo ya esta registrado");</script>' ;
				echo "<META HTTP-EQUIV = 'REFRESH' CONTENT='0 ; URL= Registro.html'>"; 
			}
		
		}
		?>	
	</BODY>	
</html>