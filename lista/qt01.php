<?php

$numero = $_GET['n'];
$soma = 0;

for($i = 0; $i <= $numero; $i++){

  $soma = $i + $soma;

}

echo "A soma é = $soma";

?>