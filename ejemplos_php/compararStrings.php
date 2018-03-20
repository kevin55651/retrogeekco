<?php
$var1 = "arreglo";
$var2 = "Arreglo";

#este funcion compara dos strings teniendo en cuenta las mayusculas y las minusculas
$resul = strcmp($var1, $var2);

#esta funcion compara dos strings sin tener encuenta ni mayusculas ni minusculas
$result = strcasecmp($var1, $var2);

#retorna 1 si son diferentes y 0 si son iguales

echo "los string (arreglo, Arreglo) con la funcion strcmp() : " . $resul . " no son iguales <br>";
echo "los string (arreglo, Arreglo) con la funcion strcasecmp() : " . $result . " son iguales";
 ?>
