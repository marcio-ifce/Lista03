<?php

$valor = $_GET['num'];
$mult = 0;

for($i = 1; $i <= 10; $i++) {
    $mult = $valor * $i;
    echo "\n$i X $valor = $mult";
}
?>