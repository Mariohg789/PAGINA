<!DOCTYPE html>

<html>
	<head>...</head>
	<BODY>
		<?php
			require 'FuncionesBD.php';
			if (isset($_POST['btnRegistrar'])) {
			$nombre = $_POST['txtNombre'];
			$apellido = $_POST['txtApellido'];
			$contrasena = $_POST['txtContrasena'];
			$direccion = $_POST['txtDireccion'];
			$telefono = $_POST['txtTelefono'];
			$correo = $_POST['txtCorreo'];
			$estado = "Activo";
			$correoValidar = validarUsuarioCorreo($correo);

			if ($correoValidar != $correo) 
			{
				insertarUsuario($nombre,$apellido,$contrasena,$direccion,$correo,$telefono,$estado);
			}
			else
			{
				echo '<script> alert("Este Correo ya esta registrado");</script>' ;
				echo "<META HTTP-EQUIV = 'REFRESH' CONTENT='2 ; URL= Registro.html'>"; 
			}
		
		}
		?>	
	</BODY>	
</html>