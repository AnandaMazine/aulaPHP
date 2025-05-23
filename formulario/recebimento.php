<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recebimento</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>
<body>
   <h1>Recebimento do Formulário</h1>
   <hr>
   <p><strong>Nome: </strong><?php echo $nome;?></p>
   <p><strong>E-mail: </strong><?php echo $email;?></p>
   <p><strong>Telefone: </strong><?php echo $telefone;?></p>
   <hr>
   <a href="index.php?msg=ok">Voltar</a>

</body>
</html>