<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles.css">
  <title>Encuesta</title>
</head>
<body>
  <h1>Postre favorito</h1>
  <form id="form1" name="form1" method="post" action="resultados.php">
    <ul>
      <li>
        <label for="voto">
          <input type="radio" name="voto" value="v1" />
          Torta de chocolate
        </label>
      </li>
      <li>
        <label for="voto">
          <input type="radio" name="voto" value="v2" />
          Torta tres leches
        </label>
      </li>
      <li>
        <label for="voto">
          <input type="radio" name="voto" value="v3" />
          Quesillo
        </label>
      </li>
      <li>
        <label for="voto">
          <input type="radio" name="voto" value="v4" />
          Torta Selva Negra
        </label>
      </li>
      <li>
        <label for="voto">
          <input type="radio" name="voto" value="v5" />
          Pie de Limón
        </label>
      </li>
    </ul>
    <input type="submit" name="button" id="button" value="Votar" />
  </form>
</body>
</html>