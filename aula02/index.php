<?php
$salario = 3000;
$aluguel = 1200;
$contas = 600;
$mes = "Maio";
$saldo = $salario - ($aluguel + $contas);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02 de Lógica com PHP</title>
    <style>
        body{font-family: Arial; background: #545955; padding: 20xp;}
        .caixa{background: white; padding: 20px; border-radius: 8px;}
    </style>
</head>
<body>
    <div class="caixa">
        <h2>Resumo Financeiro</h2></p>
        <p><strong>Salário:</strong> R$ <?php echo $salario;?></p>
        <p><strong>Aluguel:</strong> R$ <?php echo $aluguel;?></p>
        <p><strong>Contas:</strong> R$ <?php echo $contas;?></p>
        <p><strong>Mês:</strong> <?php echo $mes;?> </p>
        <p><strong>Saldo:</strong> R$ <?php echo $saldo;?></p>
    </div>
</body>
</html>