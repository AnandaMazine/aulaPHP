<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Adicionar Contato</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
    <h1>Adicionar Contato</h1>
    <form action="opcontato.php?acao=cadastrar" method="post">
        <div class="mb-3">
                <label>Nome</label>
                <input type="text" name="nome" class="form-control" required>
        </div>
        <div class="mb-3">
                <label>E-mail</label>
                <input type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
                <label>Telefone</label>
                <input type="text" name="telefone" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="index.php" class="btn btn-secondary">Voltar</a>
        </form>
    </div>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>