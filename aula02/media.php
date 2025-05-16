<?php
$n1 = 7;
$n2 = 8;
$n3 = 9;
$media = ($n1 + $n2 + $n3)/3;

echo "A soma da média foi de $media","<br>";

if ($media < 5){
    echo "Aluno reprovado!";
}else if ($media >=5 && $media <6){
    echo "Aluno de exame!";
}else{
    echo "Aluno aprovado!";
}
?>