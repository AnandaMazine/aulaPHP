<?php
    if(isset($_GET['msg']) && $_GET['msg'] == "ok"){
    echo "<h1>Dados enviados com sucesso!</h1>";
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários com PHP</title>
    <style>
        body{
            font-family: arial;
        }
        label{
            display: block;
            margin-top: 20px;
        }
        input[type="submit"]{
            background-color: blue;
            color: white;
            border: none;
            margin-top: 20px;
            padding: 10px 40px;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <h1>Dados para Contato</h1>
    <form action="recebimento.php" method="post">
        <label>Nome:</label><input type="text" name="nome"><br>
        <label>E-mail:</label><input type="email" name="email"><br>
        <label>Telefone:</label><input type="text" name="telefone"><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>