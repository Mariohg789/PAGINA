<!DOCTYPE html>

<html>
	<head>...</head>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
            <script src="../mensajes_alertas_js/mensajes.js"></script>
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
				echo '<script>resgitroCliente();</script>';
			}
			else
			{
				echo '<script>errorCliente();</script>';
				
			}
			
			
		}
		?>	
	</BODY>	
</html>