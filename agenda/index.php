<?php 
include "conexao.php";
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agenda de Contatos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
    <h1>Agenda de Contatos</h1>
    <a href="adicionar.php" class="btn btn-success mb-3">Adicionar Contatos</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Telefone</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $lista = $pdo->query("SELECT * from contatos order by id");
            while($linha = $lista->fetch()){
            ?>
            <tr>
            <td><?php echo $linha['id'];?></td>
            <td><?php echo $linha['nome'];?></td>
            <td><?php echo $linha['email'];?></td>
            <td><?php echo $linha['telefone'];?></td>
            <td>
                <a href="editar.php?id=<?php echo $linha['id'];?>" class= "btn btn-warning">Editar</a>
                <a href="opcontato.php?acao=excluir&id=<?php echo $linha['id'];?>" class="btn btn-danger" onclick="return confirm('Tem certeza?')">Excluir</a>
            </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
  </body>
</html>