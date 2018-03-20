<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Formulario login</title>

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

  </head>
  <body>
    <h1>Ingreso de administrador</h1>
    <form action="validacion.php" method="post" name="datos_usuario" id="dato_usuario">
    <table align="center">
      <tr>
        <td>Nombre:</td>
        <td><label for="nombre_usuario"></label><input type="text" name="nombre_usuario" id="nombre_usuario"></td>
      </tr>

      <tr>
        <td>Edad:</td>
        <td><label for="edad_usuario"></label><input type="text" name="edad_usuario" id="edad_usuario"></td>
      </tr>

      <tr>
        <!--&nbsp; es un espacio o salto de linea (espacio sin roptura)-->
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>

      <tr>
        <td colspan="2" align="center"><input type="submit" name="enviado" id="enviado" value="enviar"></td>
      </tr>
    </table>
  </form>
  </body>
</html>
