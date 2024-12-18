<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles.css">
  <title>Document</title>
</head>
<body>
  <?php
    function descuento($precio,$cantidad)
    {
    if($cantidad < 20) $porc=0;
    elseif($cantidad >= 20 && $cantidad < 50) $porc=5;
    elseif($cantidad >= 50 && $cantidad < 100) $porc=10;
    elseif($cantidad >= 100) $porc=15;
    $precio_producto=$cantidad*$precio;
    $descuento=(($cantidad*$precio)*$porc)/100;
    $precio_descuento=$precio_producto-$descuento;
    return array($precio_producto,$descuento,$precio_descuento);
    }
    $pt_lapices= 0;$pt_borradores =0;$pt_reglas=0;
    $ds_lapices =0; $ds_borradores =0; $ds_reglas=0;
  ?>
  <form action="" method="post">
    <table>
      <tr>
        <td colspan="3"><b>Orden de Compra</b></td>
      </tr>
      <tr>
        <td><b>Productos</b></td>
        <td><b>Cantidad</b></td>
        <td><b>Precio</b></td>
      </tr>
      <tr>
        <td><input type="checkbox" name="lapices" value="1200" />Lapices</td>
        <td><input type="text" name="cant_lapices" size="4" value="<?php echo @$_POST['cant_lapices'];?>"/></td>
        <td>
          <?php
          if(isset($_POST['cant_lapices']) && isset($_POST['lapices']))
          {
          $resultado=descuento($_POST['lapices'], $_POST['cant_lapices']);
          $pt_lapices=$resultado[0];
          $ds_lapices=$resultado[1];
          echo $pd_lapices=$resultado[2];
          }
          ?>
        </td>
      </tr>
      <tr>
        <td><input type="checkbox" name="borradores" value="1600" />Borradores</td>
        <td><input type="text" name="cant_borradores" size="4" value="<?php echo @$_POST['cant_borradores'];?>"/></td>
        <td>
          <?php
          if(isset($_POST['cant_borradores']) && isset($_POST['borradores']))
          {
          $resultado=descuento($_POST['borradores'], $_POST['cant_borradores']);
          $pt_borradores=$resultado[0];
          $ds_borradores=$resultado[1];
          echo $pd_borradores=$resultado[2];
          }
          ?>
        </td>
      </tr>
      <tr>
        <td><input type="checkbox" name="reglas" value="2100" />Reglas</td>
        <td><input type="text" name="cant_reglas" size="4" value="<?php echo @$_POST['cant_reglas'];?>"/></td>
        <td>
          <?php
          if(isset($_POST['cant_reglas']) && isset($_POST['reglas']))
          {
          $resultado=descuento($_POST['reglas'], $_POST['cant_reglas']);
          $pt_reglas=$resultado[0];
          $ds_reglas=$resultado[1];
          echo $pd_reglas=$resultado[2];
          }
          ?>
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <input type="submit" value="Enviar">
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
          <input type="reset" value="Borrar">
        </td>
      </tr>
    </table>
  </form>
  Por cada 20 unidades 5% de descuento<br />
  Por cada 50 unidades 10% de descuento<br />
  Por cada 100 unidades 15% de descuento<br />
  <table>
    <tr>
      <td>Total</td>
      <td><?php
      echo $total=$pt_lapices+$pt_borradores+$pt_reglas;?></td>
    </tr>
    <tr>
      <td>Descuento</td>
      <td><?php
      echo $descuento=$ds_lapices+$ds_borradores+$ds_reglas;?></td>
    </tr>
    <tr>
      <td>IVA</td>
      <td><?php
      echo $iva=(($total-$descuento)*12)/100;?></td>
    </tr>
    <tr>
      <td>Total a Pagar</td>
      <td><?php echo $pagar=$total-$descuento+$iva;?></td>
    </tr>
  </table>
</body>
</html>
