<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<?php
  include "conexion.php";
  $fecha = date("Y-m-d");
  $hora = date("h:i:s");
  $sql = "INSERT INTO tema (titulo, contenido, autor , fecha, hora) VALUES('$_POST[titulo]','$_POST[contenido]','$_POST[autor]','$fecha','$hora')";
  if (mysqli_query($conex,$sql)) {
    print "<p style=
            'text-align:center; font-size:2rem;'
          >Se insertó con éxito</p>";
  } else {
    print "<p style=
            'text-align:center; font-size:2rem;'
          >Estamos en mantenimiento</p>";
  }
?>

<meta http-equiv="refresh" content="2;URL=./agregar_tema.php" />
