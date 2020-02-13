<?php

$soma = 0;

while($soma <= 1000+1){
  $aleatorio = mt_rand(0, 100);
  $soma = $aleatorio + $soma;
  echo "\nNúmero : $aleatorio, Soma: $soma";
}

?>