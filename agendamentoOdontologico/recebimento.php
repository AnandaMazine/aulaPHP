<?php
$nome = $_POST['nome'];
$genero = $_POST['genero'];
$dentista = $_POST['dentista'];
$servicos = $_POST['servicos'];
$data = $_POST['data'];
$horario = $_POST['horario'];
$novadata = date("d/m/y", strtotime($data));
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento Realizado!</title>
</head>
<style>
    body{
    font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    background-color: #E1ECF9;
    padding: 30px;
}

form{
    background: #8A9FB7;
    padding: 20px;
    border-radius: 10px;
    width: 400px;
    margin: 0 auto;
    color: #091D34;
}

label{
    display: block;
    margin-top: 10px;
}
input, select{
    width: 100%;
    padding: 8px;
    margin-top: 5px;
    border-radius: 4px;
    border: 1px solid #091D34;
}
</style>

<body>
    <h1>Agendamento Realizado!</h1>
    <hr>
    <p><strong>Nome: </strong><?php echo $nome; ?></p>
    <p><strong>Gênero: </strong><?php echo $genero; ?></p>
    <p><strong>Especialista: </strong><?php echo $dentista; ?></b>
    <p><strong>Serviço(s): </strong>
    <ul>
        <?php
        foreach ($servicos as $servico) {
            echo "<li>" . htmlspecialchars($servico) . "</li>";
        }
        ?>
    </ul>
    </p>
    <p><strong>Data: </strong><?php echo $novadata; ?></b>
    <p><strong>Horário: </strong><?php echo $horario; ?></b>
    <hr>
    <a href="index.php?msg=ok">Voltar</a>
</body>
</html>