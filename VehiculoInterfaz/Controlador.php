<!DOCTYPE html>

<html>
	<head>...</head>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script src="../mensajes_alertas_js/mensajes.js"></script>
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
				echo '<script>resgitroVehiculo();</script>' ;
			}
			else
			{
				echo '<script> errorVehiculo();</script>' ; 
			}
		
		}
		?>	
	</BODY>	
</html>