<?php
$nome=$_POST['nome'];
$sexo=$_POST['sexo'];
$servicos=$_POST['servicos'];
$estado=$_POST['estado'];
$nascimento=$_POST['nascimento'];
$dtnascimento= date("d/m/y", strtotime($nascimento));

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados Recebidos</title>
</head>
<body>
    <h2>Dados Recebidos</h2>
    <p><strong>Nome: </strong> <?php echo $nome;?></p>
    <p><strong>Sexo: </strong> <?php echo $sexo;?></p>
    <p><strong>Serviço assinados: </strong>
    <ul>
        <?php
            foreach($servicos as $servico){
                echo "<li>".htmlspecialchars($servico)."</li>";
            }
        ?>
    </ul>
</p>
    <p><strong>Estado: <?php echo $estado;?></strong></p>
    <p><strong>Data de Nascimento: <?php echo $dtnascimento;?></strong></p>
</body>
</html>