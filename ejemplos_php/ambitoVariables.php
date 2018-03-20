<?php
$nombre = "es un nombre ";

function getNombre()
{
  #en este caso php toma la variable $nombre como dos variables totalmente diferente
  //$nombre = "este es otro nombre";
  /*pero si es necesario se puede llegar a establecer global la variable $nombre para
  que pueda acceder a las variables fuera de la funcion*/
  global $nombre;
  $nombre = "el nombre es: " . $nombre;
}

getNombre();

echo $nombre;
 ?>
