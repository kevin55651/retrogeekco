var cantidad = document.getElementById("cant");
var botons = document.getElementById("botons");
botons.addEventListener("click", ingresarDatos);

function ingresarDatos(evento)
{
  var cant = parseInt(cantidad.value);
  var mcm = new CalculoMCM();
  mcm.calcular(cant);
}
