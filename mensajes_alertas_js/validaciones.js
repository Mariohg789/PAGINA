function vaciosLogin()
    {
        var usuario= document.getElementById("txtName").value; 
        var co= document.getElementById("txtPass").value; 
        if(usuario==="" && co=="")
        {
           // alert("Campo vacio: escribe un usuario");
           Swal.fire('Cuidado','Ingresa los datos correspondientes','warning'); 
            return false; 
        }
        if(usuario==="")
        {
           // alert("Campo vacio: escribe un usuario");
           Swal.fire('Cuidado','Ingresa un usuario','warning'); 
            return false; 
        }
        if(co==="")
        {
           // alert("Campo vacio: escribe un contraseña");
           Swal.fire('Cuidado','Ingresa una contraseña','warning');
            return false; 
        }
    }
function vaciosRegistro()
    {
        var nombre= document.getElementById("txtUsuario").value; 
        var contrasena1=document.getElementById("txtPassword").value;
        var contrasena2 =document.getElementById("txtConfirmar").value;
        if(nombre==="" && contrasena1==="" && contrasena2==="")
        {
       
            Swal.fire({
                position: 'top-end',
                type: 'warning',
                title: 'INGRESA LOS DATOS QUE SE TE PIDEN',
                showConfirmButton: false,
                timer: 1250
              }); 
            return false; 
        }
        if(nombre==="")
        {
       
           Swal.fire('Cuidado','Ingresa un nombre de usuario','warning'); 
            return false; 
        }
        if(contrasena1==="")
        {
        
           Swal.fire('Cuidado','Ingresa una contraseña','warning');
            return false; 
        }
        if(contrasena2==="")
        {
         
           Swal.fire('Cuidado','Confirme la contraseña','warning');
            return false; 
        }
    }
