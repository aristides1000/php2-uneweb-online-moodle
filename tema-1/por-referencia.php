<?php
  function foo(&$var) {
    $var++;
  }

  $a=5;
  foo($a);
  // $a es 6 aquí
  echo $a;
?>
