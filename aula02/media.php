<?php
// Crie um algoritmo que leia três notas e faça a media, se o aluno tirar abaixo de 5 reprovado, entre 5 e 6 de exame e acimda de 6 aprovado
$n1 = 7;
$n2 = 8;
$n3 = 9;
$media = ($n1 + $n2 + $n3)/3;

echo "O resultado da média foi de $media","<br>";

if ($media < 5){
    echo "Aluno reprovado!";
}else if ($media >=5 && $media <6){
    echo "Aluno de exame!";
}else{
    echo "Aluno aprovado!";
}
?>