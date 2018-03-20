<?php

function contador()
{
  #static conserva el valor de la variable y solo se lee una vez
  static $contador = 0;
  $contador++;

  echo $contador . "<br>";
}

contador();
contador();
contador();
contador();
 ?>
