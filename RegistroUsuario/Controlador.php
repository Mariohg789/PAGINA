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
			$contrasenaEncriptada = password_hash($contrasena,PASSWORD_DEFAULT);
			$direccion = $_POST['txtDireccion'];
			$telefono = $_POST['txtTelefono'];
			$correo = $_POST['txtCorreo'];
			$estado = $_POST['txtEstado'];
			$status = "Activo";
			

			if (validarUsuarioCorreo($correo) != $correo) 
			{
				insertarUsuario($nombre,$apellido,$contrasenaEncriptada,$direccion,$correo,$telefono,$estado,$status);
			}
			else
			{
				echo '<script> alert("Este Correo ya esta registrado");</script>' ;
				echo "<META HTTP-EQUIV = 'REFRESH' CONTENT='0 ; URL= Registro.html'>"; 
			}
		
		}
		?>	
	</BODY>	
</html>