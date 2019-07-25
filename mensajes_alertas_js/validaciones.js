//ALERTAS DE LOGIN 
function campoVaciosLogin()
    {
        var usuarioLogin= document.getElementById(" ").value; 
        var coLogin= document.getElementById(" ").value; 
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
	//ALERTA DE REGISTRO USUARIO
function campoVaciosRegistroUsuario()
    {
        var nombreRUsuario= document.getElementById(" ").value; 
        var contrasenaRU1=document.getElementById(" ").value;
        var contrasenaRU2=document.getElementById(" ").value;
		//TODOS LOS CAMPOS
        if(nombreRUsuario==="" && contrasenaRU1==="" && contrasenaRU2==="")
        {
       
            Swal.fire('Campo vacío','Ingresa algún campo','warning');
            return false; 
        }
		//USUARIO
        if(nombreRUsuario==="")
        {
       
           Swal.fire('Campo vacío','Ingresa un nombre de usuario','warning'); 
            return false; 
        }
		//CONTRASENIA 1
        if(contrasenaRU1==="")
        {
        
           Swal.fire('Campo vacío','Ingresa una contraseña','warning');
            return false; 
        }
		// CONFIRMAR CONTRASENIA 
        if(contrasenaRU2==="")
        {
         
           Swal.fire('Campo vacío','Las Contraseñas no coinciden','warning');
            return false; 
        }
    }
	
	//ALERTA PARA CAMPOS VEHICULO
	function campoVaciosVehículo()
	{
		var campoVacioSerie= document.getElementById(" ").value; 
		var campoVacioSerieModelo= document.getElementById(" ").value; 
		var campoVacioAnio= document.getElementById(" ").value; 
		var campoVacioVersion= document.getElementById(" ").value; 
		var campoVacioPlaca= document.getElementById(" ").value; 
		//TODOS LOS CAMPOS
		if (campoVacioSerie==="" && campoVacioSerieModelo==="" && campoVacioAnio==="" && campoVacioVersion==="" && campoVacioPlaca==="")
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
			Swal.fire('Campo vacío','Ingresa una marca','question');
			return 0;
		}
		//VERSION
		if(campoVacioVersion==="")
		{
			Swal.fire('Campo vacío','Ingresa una versió','question');
			return 0;
		}
		//PLACA
		if()
		{
			Swal.fire('Campo vacío','Ingresa una placa','question');
			return 0;
		}
	}
		
		//CAMPOS VACIOS DE CLIENTE
		function campoVaciosCliente()
		{
			var campoVacioNombre= document.getElementById(" ").value; 
			var campoVacioDireccion= document.getElementById(" ").value; 
			var campoVacioTelefono= document.getElementById(" ").value; 
			var campoVacioCorreo= document.getElementById(" ").value; 
			var campoVacioEstado= document.getElementById(" ").value;
			var campoVacioAPaterno= document.getElementById(" ").value; 
			var campoVacioAMaterno= document.getElementById(" ").value; 
			//TODOS LOS CAMPOS
			if(campoVacioNombre==="" && campoVacioDireccion==="" && campoVacioTelefono==="" && campoVacioCorreo==="" && campoVacioEstado==="" && campoVacioAPaterno==="" && campoVacioAMaterno==="")
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
				Swal.fire('Campo vacío','Ingresa un Estado','question');
				return 0;
				
			}
			// APELLIDO PATERNO
			if(campoVacioAPaterno==="")
			{
				Swal.fire('Campo vacío','Ingresa un Apellido Paterno','question');
				return 0;
				
			}
			//APELLIDO MATERNO
			if(campoVacioAMaterno==="")
			{
				Swal.fire('Campo vacío','Ingresa un Apellido Materno','question');
				return 0;
				
			}
			}
			
	//CAMPOS VACIOS DE TALLER RESERVACION
	function camposVaciosReservación()
	{
		var campoVacioFecha= document.getElementById(" ").value;
		var campoVaciosHora= document.getElementById(" ").value
		//TODOS LOS CAMPOS
		if(campoVacioFecha==="" && campoVaciosHora==="")
		{
			Swal.fire('No hay datos!','Selecciona los datos correspondientes','warning');
			return 0;
		}
		//FECHA
		if(campoVacioFecha==="")
		{
			Swal.fire('Campo vacío','Ingresa una Fecha','question');
			return 0;
		}
		//HORA
		if(campoVaciosHora==="")
		{
			Swal.fire('Campo vacío','Ingresa una Hora','question')
			return 0;
		}
	}

	//CAMPOS VACIOS DE TABLA TALLER 
	function campoVaciosTaller()
	{
		var campovacioDireccionT= document.getElementById(" ").value;
		var campoVacioCorreoT= document.getElementById(" ").value;
		var campoVacioTelefonoT= document.getElementById(" ").value;
		var campoVacioCapacidad= document.getElementById(" ").value;
		
		//TODOS LOS CAMPOS
		if(campovacioDireccionT==="" && campoVacioCorreoT==="" && campoVacioTelefonoT==="" && campoVacioCapacidad==="")
		{
			Swal.fire('No hay datos!','Ingresa los datos correspondientes','warning');
			return 0;
		}
		//DIRECCION
		if(campovacioDireccionT==="")
		{
			Swal.fire('Campo vacío','Ingresa una direccion','question');
			return 0;
		}
		//CORREO
		if(campoVacioCorreoT==="")
		{
			Swal.fire('Campo vacío','Ingresa un correo','question');
			return 0;
		}
		//TELEFONO
		if(campoVacioTelefonoT==="")
		{
			Swal.fire('Campo vacío','Ingresa un Teléfono','question');
			return 0;
		}
		//CAPACIDAD
		if(campoVacioCapacidad==="")
		{
			Swal.fire('Campo vacío','Ingresa una Capacidad','question');
			return 0;
		}
	}
			
	//CAMPOS VACIOS JEFE-TALLER
	
	function campoVaciosJefe()
	{
		var campoVacioNombreJefe= document.getElementById(" ").value;
		var campoVacioAPaternoJefe= document.getElementById(" ").value;
		var campoVacioAMaternoJefe= document.getElementById(" ").value;
		var campoVacioCorreoJefe= document.getElementById(" ").value;
		
		//TODOS LOS CAMPOS
		if(campoVacioNombreJefe==="" && campoVacioAPaternoJefe==="" && campoVacioAMaternoJefe==="" && campoVacioCorreoJefe==="")
		{
			Swal.fire('No hay datos!','Ingresa los datos correspondientes','warning');
			return 0;
		}
		//NOMBRE
		if(campoVacioNombreJefe==="")
		{
			Swal.fire('Campo vacío','Ingresa un Nombre','question');
			return 0;
		}
		//APELLIDO PATERNO
		if(campoVacioAPaternoJefe==="")
		{
			Swal.fire('Campo vacío','Ingresa un Apellido Paterno','question');
			return 0;
		}
		//APELLIDO MATERNO
		if(campoVacioAMaternoJefe==="")
		{
			Swal.fire('Campo vacío','Ingresa un Apellido Materno','question');
			return 0;
		}
		//CORREO
		if(campoVacioCorreoJefe==="")
		{
			Swal.fire('Campo vacío','Ingresa un correo','question');
			return 0;
		}
	}
		
		
		
		
		
		
	
	
