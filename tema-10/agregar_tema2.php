<?php
include "conexion.php";
$fecha=date("Y-m-d");
$hora=date("h:i:s a");
$sql="insert into tema value('','$_POST[titulo]','$_POST[contenido]','$_POST[autor]','$fecha','$hora')";
if(mysqli_query($conex,$sql))
{
print "se inserto con exito";
}
else
{
print "Estamos en mantenimiento";
} ?>
<meta http-equiv="refresh" content="2;URL=./agregar_tema.php" />

