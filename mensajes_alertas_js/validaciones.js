//ALERTAS DE LOGIN 
function campoVaciosLogin()
    {
        var usuarioLogin= document.getElementById("txtUserName").value; 
        var coLogin= document.getElementById("txtPassword").value; 
        if(usuarioLogin==="" && coLogin=="")
        {
           // alert("Campo vacio: escribe un usuario");
           Swal.fire('Campo vacío','Ingresa un Usuario y una Contraseña','question');
            return false; 
        }
        if(usuarioLogin==="")
        {
           // alert("Campo vacio: escribe un usuario");
           SSwal.fire('Campo vacío','Ingresa una contraseña','question');
            return false; 
        }
        if(coLogin==="")
        {
           // alert("Campo vacio: escribe un contraseña");
           Swal.fire('Campo vacío','Ingresa una contraseña','warning');
            return false; 
        }
    }
	
	
	//ALERTA PARA CAMPOS VEHICULO
	function campoVaciosVehículo()
	{
		var campoVacioSerie= document.getElementById("txtNumeroSerie").value; 
		var campoVacioSerieModelo= document.getElementById("txtModelo").value; 
		var campoVacioAnio= document.getElementById("txtAnio").value; 
		var campoVacioMarca=document.getElementById("txtMarca").value;
		var campoVacioVersion= document.getElementById("txtVersion").value; 
		var campoVacioPlaca= document.getElementById("txtPlacas").value; 
		//TODOS LOS CAMPOS
		if (campoVacioSerie==="" && campoVacioSerieModelo==="" && campoVacioAnio==="" && campoVacioMarca==="" && campoVacioVersion==="" && campoVacioPlaca==="")
		{
			Swal.fire('No hay datos!','Ingresa los datos correspondientes','warning');
            return false; 
		}
		//SERIE
		if (campoVacioSerie==="")
		{
			Swal.fire('Campo vacío','Ingresa un Número de serie','question');
			return 0;
		}
		//MODELO
		if(campoVacioSerieModelo==="")
		{
			Swal.fire('Campo vacío','Ingresa un Modelo','question');
			return 0;
		}
		//ANIO
		if(campoVacioAnio==="")
		{
			Swal.fire('Campo vacío','Ingresa un Año','question');
			return 0;
		}
		//Marca
		if(campoVacioMarca==="")
		{
			Swal.fire('Campo vacío','Ingresa una marca','question');
			return 0;
		}
		//VERSION
		if(campoVacioVersion==="")
		{
			Swal.fire('Campo vacío','Ingresa una versión','question');
			return 0;
		}
		//PLACA
		if(campoVacioPlaca==="")
		{
			Swal.fire('Campo vacío','Ingresa una placa','question');
			return 0;
		}
	}
		
		//CAMPOS VACIOS DE CLIENTE
		function campoVaciosCliente()
		{
			var campoVacioNombre= document.getElementById("txtNombre").value; 
			var campoVacioDireccion= document.getElementById("txtDireccion").value; 
			var campoVacioTelefono= document.getElementById("txtTelefono").value; 
			var campoVacioCorreo= document.getElementById("txtCorreo").value; 
			var campoVacioEstado= document.getElementById("txtEstado").value;
			var campoVacioAPaterno= document.getElementById("txtApellido").value; 
			var campoVacioContraCliente= document.getElementById("txtContrasena").value; 
			//TODOS LOS CAMPOS
			if(campoVacioNombre==="" && campoVacioDireccion==="" && campoVacioTelefono==="" && campoVacioCorreo==="" && campoVacioEstado==="" && campoVacioAPaterno==="" && campoVacioContraCliente==="")
			{
				Swal.fire('No hay datos!','Ingresa los datos correspondientes','warning');
				return false; 
			}
			//NOMBRE
			if(campoVacioNombre==="")
			{
				Swal.fire('Campo vacío','Ingresa un nombre','question');
				return 0;
				
			}
			//DIRECCION
			if(campoVacioDireccion==="")
			{
				Swal.fire('Campo vacío','Ingresa una  dirección','question');
				return 0;
			}
			//TELEFONO
			if(campoVacioTelefono==="")
			{
				Swal.fire('Campo vacío','Ingresa un telefono','question');
				return 0;
			}
			//CORREO
			if(campoVacioCorreo==="")
			{
				Swal.fire('Campo vacío','Ingresa un Correo','question');
				return 0;
			}
			//ESTADO
			if(campoVacioEstado==="")
			{
				Swal.fire('Campo vacío','Ingresa un Estado de provincia','question');
				return 0;
				
			}
			// APELLIDO PATERNO
			if(campoVacioAPaterno==="")
			{
				Swal.fire('Campo vacío','Ingresa un Apellido Paterno','question');
				return 0;
				
			}
			//APELLIDO MATERNO
			if(campoVacioContraCliente==="")
			{
				Swal.fire('Campo vacío','Ingresa una Contraseña','question');
				return 0;
				
			}
			}
			
	//CAMPOS VACIOS DE TALLER RESERVACION
	function camposVaciosReservación()
	{
		var campoVacioDia= document.getElementById("bday").value;
		
		//Dia
		if(campoVacioDia==="")
		{
			Swal.fire('Campo vacío','Ingresa un Día','question');
			return 0;
		}
		
	}
			
	
		
		
		
		
	
	
