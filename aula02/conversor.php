<?php
// Crie um algoritmo para ler um valor em real e converter em dólar, dólar 5,60

$real = 5.60;
$dolar = 5.60;
$resultado = $real / $dolar;

echo "R$ ".number_format($real,2)." equivale a US$ ".number_format($dolar,2);

// pulando linha
echo "<br>";

// Contatenando em PHP
echo "O valor em dolar será de ".number_format($resultado,2);

?>