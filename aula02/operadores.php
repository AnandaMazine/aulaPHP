<?php
//OPERADORES RELACIONAIS
// == COMPARAÇÃO
// != DIFERENTE
// > MAIOR QUE
// >= MAIOR OU IGUAL QUE
// < MENOR QUE
// <= MENOR OU IGUAL QUE

$a = 10;
$b = 20;
$c = 10;

echo "Operadores Relacionais.<br>";

echo "A == C: ";
var_dump($a == $c);
echo "<br>";

echo "A != C: ";
var_dump($a != $c);
echo "<br>";

echo "A > B: ";
var_dump($a > $b);
echo "<br>";

echo "A >= C: ";
var_dump($a >= $c);
echo "<br>";

echo "A < B: ";
var_dump($a < $b);
echo "<br>";

echo "A <= B: ";
var_dump($a <= $b);
echo "<br>";

//CONDIÇÕES SIMPLES E COMPOSTAS
$idade = 17;
 // if condição se - else condição else

 if($idade >= 18){
    echo "Você é maior de Idade";
 }else{
    echo "Você é menor de Idade";
 }

 //CONDIÇÃO COMPOSTA
 $clima = "sol";
 if ($clima == "chuva"){
    echo "Leve um guarda-chuva!";
 } else if($clima == "sol"){
    echo "Use protetor solar!";
 } else {
    echo "Prepare-se para o tempo estável";
 }
?>