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
      $sql = "SELECT id, titulo, contenido, autor, fecha, hora FROM tema WHERE id = '$_GET[cual]' ";
      $con = mysqli_query($conex, $sql);
      $ver = mysqli_fetch_array($con);
    ?>
    <div class="temas-alignment">
      <p>Título: <?php print $ver[1];?></p>
      <p>Autor: <?php print $ver[3];?></p>
      <p>Fecha: <?php print $ver[4];?></p>
      <p>Hora: <?php print $ver[5];?></p>
      <p>Contenido: <?php print $ver[2];?></p>
      <h2>Responder al tema</h2>
      <form id = "form1" name = "form1" method = "post" action = "./agregar_respuesta.php">
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
            <td colspan="2" class="td-center"> <input type="submit" name="button" id="button" value="Responder" /> </td>
          </tr>
        </table>
      </form>
      <?php
        $sql2 = "SELECT id, id_tema, autor, fecha, respuesta FROM respuesta WHERE id_tema = '$ver[0]' ORDER BY id DESC";
        $con2 = mysqli_query($conex, $sql2);
        while ($ver2 = mysqli_fetch_array($con2)){
      ?>
        <p>Número: <?php print $ver2[0];?> </p>
        <p>Autor: <?php print $ver2[2];?> </p>
        <p>Fecha: <?php print $ver2[3];?> </p>
        <p>Respuesta: <?php print $ver2[4]; ?> </p>
        <hr class="temas-hr">
      <?php } ?>
    </div>
  </body>
</html>