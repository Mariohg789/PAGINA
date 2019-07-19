//Resgistro cliente
function resgitroCliente()
{
  Swal.fire({
    position: 'top',
    type: 'success',
    title: 'Usuario registrado',
    showConfirmButton: false,
    timer: 2000
  }).then(function(){window.location="#"})
}
//Error de cliente
function errorCliente()
{
  Swal.fire({
    position: 'top',
    type: 'error',
    title: 'Usuario no registrado',
    showConfirmButton: false,
    timer: 2000
  }).then(function(){window.location=""})
}
//Bienvenido 
function bienvenido()
{
  Swal.fire({
    position: 'top',
    type: 'success',
    title: 'Bienvenido',
    showConfirmButton: false,
    timer: 2000
  }).then(function(){window.location="../MenuLoggeado/IndexLogeado.html"})

} 
//Error al entrada 
function erroLogin()
{
    Swal.fire('MARVAN MECHANIC´S',
     'Tu usuario y/o contraseña no validos', 
     'error').then(function()
     {window.location="../Menu Principal/Index.html"});

}
//Modificar Datos 
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
//


