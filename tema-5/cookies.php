<?php
// reviso si recibe datos del formulario
if (isset($_POST["estilo"])) {
   //es que estoy recibiendo un estilo nuevo, lo tengo que meter en las cookies
   $estilo = $_POST["estilo"];
   //meto el estilo en una cookie
   setcookie("estilo", $estilo, time() + (60 * 60 * 24 * 90));
}
?>
<html>
<head>
   <title>Cookies en PHP</title>
   <style type="text/css">
      body {
         background: <?php print $estilo; ?>;
         color:aqua;
      }
   </style>
</head>
<body>
   <form action="" method="post">
      Color de fondo página:
      <br>
      <select name="estilo">
         <option value="#23F723">Verde </option>
         <option value="#F723DE">Rosa </option>
         <option value="#060606">Negro </option>
      </select>
      <input type="submit" value="Actualizar">
   </form>
</body>
</html>

