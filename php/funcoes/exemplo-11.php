<?php

//Função primordial para entregas de produtos

$dt = new DateTime();

$period = new DateInterval("P15D");

echo $dt-> format("d/m/Y H:i:s");

//adicionar
echo "<br>";
$dt->add($period);

echo "<br>";

echo $dt-> format("d/m/Y H:i:s");



?>