<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles.css">
  <title>Foro</title>
</head>
<body>
  <?php
    include "conexion.php";
    include "menu.php";
  ?>
  <br>

  <form id="form1" name="form1" method="post" action="">
    <table class="table">
      <tr>
        <td class="buscar_por_temas"><label for="buscar">Temas</label></td>
        <td class="buscar_por_temas"><input type="text" name="buscar" id="buscar" /></td>
        <td class="buscar_por_temas"><input type="submit" name="button" id="button" value="Buscar por temas" /></td>
      </tr>
    </table>
  </form>

  <form id="form2" name="form2" method="post" action="">
    <table class="table">
      <tr>
        <td class="buscar_por_autor"><label for="autor">Lista de autores</label></td>
        <td class="buscar_por_autor">
          <select name="autor" id="autor">
          <?php
            $sql4 = "SELECT autor FROM tema GROUP BY autor ORDER BY autor";
            $con4 = mysqli_query($conex, $sql4);
            while($autor = mysqli_fetch_array($con4)) {
          ?>
          <option value="<?php print $autor[0]; ?>">
            <?php print $autor[0]; ?>
          </option>
          <?php } ?>
          </select>
        </td>

        <td class="buscar_por_autor">
          <input type="submit" name="button2" id="button2" value="buscar" />
        </td>

      </tr>
    </table>
  </form>

  <br>

  <table>
    <tr>
      <td>Temas</td>
      <td>Autor</td>
      <td>Fecha</td>
      <td>Respuestas</td>
    </tr>
    <?php
      if(@$_POST['buscar']) {
        $sql="SELECT id, titulo, autor, fecha FROM tema WHERE (titulo LIKE '%$_POST[buscar]%' OR contenido LIKE '%$_POST[buscar]%') ORDER BY id DESC";
      } else if(@$_POST['autor']) {
        $sql = "SELECT id, titulo, autor, fecha FROM tema WHERE autor = '$_POST[autor]' ORDER BY id DESC";
      } else {
        $sql = "SELECT id, titulo, autor, fecha FROM tema ORDER BY id DESC";
      }
      $con = mysqli_query($conex, $sql);
      while($ver = mysqli_fetch_array($con)) {
    ?>
    <tr>
    <td>
      <a href="./temas.php?cual=<?php print $ver[0]?>"><?php print $ver[1]?></a>
    </td>
    <td><?php print $ver[2]?></td>
    <td><?php print $ver[3]?></td>
    <td>

      <?php
        $sql2="SELECT id FROM respuesta WHERE id_tema = '$ver[0]'";
        $filas = mysqli_query($conex, $sql2);
        print mysqli_num_rows($filas);
      ?>
    </td>
    </tr>
    <?php } ?>
  </table>
</body>
</html>