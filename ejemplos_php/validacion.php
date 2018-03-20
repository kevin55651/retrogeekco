<style>
h1
{
    text-align: center;
}

body
{
  background-color:  #c52d0c;
}

table
{
  background-color: #DAF7A6;
  padding: 5px;
  border: black 5px solid;
}

.validado
{
  text-align: center;
  color:  white;
  font-weight: bold;
}

.noValidado
{
  text-align: center;
  color: black;
  font-weight: bold;
}
</style>


<?php
if(isset($_POST["enviado"]))
{
  $usuario = $_POST["nombre_usuario"];
  $edad = $_POST["edad_usuario"];

  if($usuario == "cesar" && $edad >= 18)
  {
    echo "<p class=\"validado\">administrador con acceso: <br> Bienvenido!!!</p>";
  }
  else if($usuario == "cesar" && $edad < 18)
  {
    echo "<p class=\"noValidado\">Usted no tiene derechos de administrador por ser menor de edad</p>";
  }
  else
  {
    echo "<p class = \"noValidado\">Usted no tiene ningun derecho de acceso</p>";
  }
}
 ?>
