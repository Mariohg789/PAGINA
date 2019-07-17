function bienvenido()
{
  Swal.fire({
    position: 'top-end',
    type: 'success',
    title: 'BIENVENIDO AL SISTEMA DE RESERVACION',
    showConfirmButton: false,
    timer: 2000
  })

}
function erroLogin()
{
    Swal.fire('MARVAN MECHANIC´S', 'Tu usuario y/o contraseña no validos', 'error').then(function(){window.location="Index.html"});

}
function modificarDato()
{
  Swal.fire({
    position: 'top-end',
    type: 'success',
    title: 'Your work has been saved',
    showConfirmButton: false,
    timer: 1500
  }).then(function(){window.location="Index.php"})
}
function eliminarDato()
{
  Swal.fire({
    position: 'top-end',
    type: 'success',
    title: 'Your work has been saved',
    showConfirmButton: false,
    timer: 1500
  })
}