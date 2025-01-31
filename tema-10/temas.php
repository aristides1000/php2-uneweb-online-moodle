<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles.css">
</head>
  <body>
    <?php
    include "./conexion.php";
    include "./menu.php";
    $sql="select id,titulo,contenido,autor,fecha,hora from tema where id='$_GET[cual]' ";
    $con=mysqli_query($conex,$sql);
    $ver=mysqli_fetch_array($con);
    ?>
    <p>
    Tirulo: <?php print $ver[1];?><br />
    Autor: <?php print $ver[3];?> <br />
    Fecha: <?php print $ver[4];?> <br />
    Hora: <?php print $ver[5];?> <br />
    Contenido: <?php print $ver[2];?></p>
    <p>
    Responder al tema</p>
    <form id="form1" name="form1" method="post" action="./agregar_respuesta.php">
      <table id="temas">
        <tr>
          <td><label for="respuesta">Respuesta</label> </td>
          <td><textarea name="respuesta" id="respuesta"></textarea> </td>
        </tr>
        <tr>
          <td><label for="autor">Autor:</label> </td>
          <td><input type="text" name="autor" id="autor" /> </td>
          <input name="oculto" type="hidden" id="oculto" value="<?php print $ver[0];?>" />
        </tr>
        <tr>
          <td> <input type="submit" name="button" id="button" value="Responder" /> </td>
        </tr>
      </table>
    </form>
    <p>
    <?php $sql2="select id,id_tema,autor,fecha,respuesta from respuesta where id_tema='$ver[0]' order by id desc";
    $con2=mysqli_query($conex,$sql2);
    while($ver2=mysqli_fetch_array($con2)){
    print $ver2[1];?><br>
    Autor: <?php print $ver2[2];?> <br>
    Fecha: <?php print $ver2[3];?> <br>
    Respuesta: <?php print $ver2[4]; ?> <br>
      <p>--------------------------------------</p><?php }
    ?>
    </p>
  </body>
</html>