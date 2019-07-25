//Resgistro cliente *
function resgitroCliente()
{
  Swal.fire({
    position: 'top',
    type: 'success',
    title: 'Usuario registrado',
    showConfirmButton: false,
    timer: 2000
  }).then(function(){window.location="../VehiculoInterfaz/vehiculo.php"})
}
//Error de cliente*
function errorCliente()
{
  Swal.fire({
    position: 'top',
    type: 'error',
    title: 'el usuario ya existe favor de verificar',
    showConfirmButton: false,
    timer: 2000
  }).then(function(){window.location="../RegistroUsuario/Registro.html"})
}
//Bienvenido *
function bienvenido()
{
  Swal.fire({
    position: 'top',
    type: 'success',
    title: 'Bienvenido',
    showConfirmButton: false,
    timer: 2000
  }).then(function(){window.location="../Menuloggeado/indexLogeado.php"})

} 
/*Error de datos**/
function erroLogin()
{
    Swal.fire('MARVAN MECHANIC´S',
     'Tu usuario y/o contraseña no validos', 
     'error').then(function()
     {window.location="../LoginOmar/Login.html"});

}
 
/*Modificar Dato*/
function modificarDato()
{
  Swal.fire({
    position: 'top-end',
    type: 'CORRECTO',
    title: 'Se ha modificado',
    showConfirmButton: false,
    timer: 1500
  }).then(function(){window.location="#"})
}
//Eliminar Datos 
function eliminarDato()
{
  Swal.fire({
    position: 'top-end',
    type: 'CORRECTO',
    title: 'Se ha eliminado',
    showConfirmButton: false,
    timer: 1500
  }).then(function(){window.location="#"})
}
//Reserva
function reserva()
{
  Swal.fire(
    'Reservacion',
    'Tu reservacion se hizo con exito',
    'success'
  )
}
//Error de reservación 
function errorReserva()
{
  Swal.fire(
    'Good job!',
    'You clicked the button!',
    'error'
  )
}

//Registro vehiculo
function resgitroVehiculo()
{
  Swal.fire({
    position: 'top',
    type: 'success',
    title: 'Vehiculo registrado',
    showConfirmButton: false,
    timer: 2000
  }).then(function(){window.location="../MenuLoggeado/indexLogeado.php"})
}

function errorVehiculo()
{
  Swal.fire({
    position: 'top',
    type: 'error',
    title: 'el vehiculo ya existe favor de verificar',
    showConfirmButton: false,
    timer: 2000
  }).then(function(){window.location="../VehiculoInterfaz/vehiculo.php"})
}