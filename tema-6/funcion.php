<?php
  function calculo($num1, $num2, $operacion) {
    switch($operacion) {
      case "+":
      $resultado = "{$num1} + {$num2} = ". strval($num1+$num2);
      break;
      case "*":
      $resultado = "{$num1} * {$num2} = " . $num1*$num2;
      break;
      case "/":
      $resultado = "{$num1} / {$num2} = " . $num1/$num2;
      break;
      case "-":
      $resultado = "{$num1} - {$num2} = " . strval($num1-$num2);
      break;
      case "Raiz":
      $resultado = "Raiz({$num1}) = " . sqrt($num1);
      break;
      case "^2":
      $resultado = "{$num1}^2 = " . $num1*$num1;
      break;
      case "^3":
      $resultado = "{$num1}^3 = " . $num1*$num1*$num1;
      break;
      default:
      $resultado = 0;
    }

    return $resultado;
  }
?>