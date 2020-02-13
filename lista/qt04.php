<?php

echo "<h3>Tabela 10 linhas, 5 colunas</h3>";

for($i = 0; $i <= 10; $i++){
  echo "<table>";
    echo "<tr>";
      for($j = 0; $j <= 5; $j++){
        echo '<td> |Lógica| </td>';
      }
    echo "<tr/>";
  echo "<table/>";
}

?>