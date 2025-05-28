<?php
include "conexao.php";

$id= $_GET['id'];

$sql = $pdo->prepare("SELECT * from contatos where id = ?");
$sql->bindValue(1, $id);
$sql->execute();

$linha = $sql->fetch();
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Contato</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
    <h1>Editar Contato</h1>
    <form action="opcontato.php?acao=editar&&id=<?php echo $linha['id'];?>" method="post">
        <div class="mb-3">
                <label>Nome</label>
                <input type="text" name="nome" class="form-control" required value="<?php echo $linha['nome'];?>">
        </div>
        <div class="mb-3">
                <label>E-mail</label>
                <input type="email" name="email" class="form-control" required value="<?php echo $linha['email'];?>">
        </div>
        <div class="mb-3">
                <label>Telefone</label>
                <input type="text" name="telefone" class="form-control" required value="<?php echo $linha['telefone'];?>">
        </div>
        <button type="submit" class="btn btn-primary">Atualizar</button>
        <a href="index.php" class="btn btn-secondary">Voltar</a>
        </form>
    </div>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>