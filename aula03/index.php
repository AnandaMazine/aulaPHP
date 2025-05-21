<?php
// Variáveis do tipo ARRAY
$carros = ["CIVIC G10", "AMAROK", "GM CRUZE"];
// echo $carros[2];

// var_dump($carros);

$carro = [
    "modelo" => "CIVIC G10",
    "cor" => "BRANCO",
    "marca" => "HONDA",
    "ano" => 2020,
];
echo $carro["modelo"];
echo "<br>";
echo $carro["cor"];
echo "<br>";
echo $carro["marca"];
echo "<br>";
echo $carro["ano"];
echo "<br><hr>";

// var_dump($carro);

$estoque = [
    ["modelo" => "CIVIC G10", "cor" => "BRANCO", "marca" => "HONDA", "ano" => 2020, "foto" => "01.jpg"],
    ["modelo" => "AMAROK", "cor" => "AZUL", "marca" => "VOLKSWAGEM", "ano" => 2022, "foto" => "02.jpg"],
    ["modelo" => "GM CRUZE", "cor" => "VERMELHO", "marca" => "GM", "ano" => 2025, "foto" => "03.jpg"],
    ["modelo" => "FIAT UNO", "cor" => "VERMELHO", "marca" => "FIAT", "ano" => 1997, "foto" => "04.jpg"],
];

foreach($estoque as $item){
    echo "<img src = '".$item ['foto']."'><br><strong>MODELO: </strong>".$item['modelo']." - <strong>COR: </strong>".$item['cor']." - <strong>MARCA: </strong>".$item['marca']." - <strong>ANO: </strong>".$item['ano']."<br><hr>";

};
?>