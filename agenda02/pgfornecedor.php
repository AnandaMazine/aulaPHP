<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciamento de Fornecedores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>

<body>
    <?php include "menu.php"; ?>
    <div class="container">
        <h2>Gerenciamento de Fornecedores</h2>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalAdicionar">
            Adicionar Fornecedor +
        </button>

        <div class="modal fade" id="ModalAdicionar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">

                        <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastro de Fornecedor</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="opfornecedor.php?acao=cadastrar" method="post">
                            <div class="mt-3">
                                <label class="form-label">Razão Social</label>
                                <input type="text" class="form-control" name="razao">
                            </div>
                            <div class="mt-3">
                                <label class="form-label">Nome Fantasia</label>
                                <input type="text" class="form-control" name="fantasia">
                            </div>
                            <div class="mt-3">
                                <label class="form-label">Endereço</label>
                                <input type="text" class="form-control" name="endereco">
                            </div>
                            <div class="mt-3">
                                <label class="form-label">E-mail</label>
                                <input type="email" class="form-control" name="email">
                            </div>
                            <div class="mt-3">
                                <label class="form-label">Telefone</label>
                                <input type="text" class="form-control" name="telefone">
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-primary">Salvar</button></form>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-5">
            <h4>Lista de Fornecedores</h4>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Razão Social</th>
                        <th>Nome Fantasia</th>
                        <th>Endereço</th>
                        <th>E-mail</th>
                        <th>Telefone</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $lista = $pdo->query("SELECT * from fornecedores ORDER BY id");
                    while ($linha = $lista->fetch()) { ?>
                        <tr>
                            <td><?php echo $linha['id']; ?></td>
                            <td><?php echo $linha['razao']; ?></td>
                            <td><?php echo $linha['fantasia']; ?></td>
                            <td><?php echo $linha['endereco']; ?></td>
                            <td><?php echo $linha['email']; ?></td>
                            <td><?php echo $linha['telefone']; ?></td>
                            <td>
                                <!-- Botão editar -->
                                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#ModalEditar<?php echo $linha['id']; ?>">
                                    Editar
                                </button>
                                <!-- Modal editar início -->
                                <div class="modal fade" id="ModalEditar<?php echo $linha['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">

                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Edição de Fornecedor</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="opfornecedor.php?acao=editar&id=<?php echo $linha['id']; ?>" method="post">
                                                    <div class="mt-3">
                                                        <label class="form-label">Razão Social</label>
                                                        <input type="text" class="form-control" name="razao" value="<?php echo $linha['razao']; ?>">
                                                    </div>
                                                    <div class="mt-3">
                                                        <label class="form-label">Nome Fantasia</label>
                                                        <input type="text" class="form-control" name="fantasia" value="<?php echo $linha['fantasia']; ?>">
                                                    </div>
                                                    <div class="mt-3">
                                                        <label class="form-label">Endereço</label>
                                                        <input type="text" class="form-control" name="endereco" value="<?php echo $linha['endereco']; ?>">
                                                    </div>
                                                    <div class="mt-3">
                                                        <label class="form-label">E-mail</label>
                                                        <input type="email" class="form-control" name="email" value="<?php echo $linha['email']; ?>">
                                                    </div>
                                                    <div class="mt-3">
                                                        <label class="form-label">Telefone</label>
                                                        <input type="text" class="form-control" name="telefone" value="<?php echo $linha['telefone']; ?>">
                                                    </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                                <button type="submit" class="btn btn-primary">Salvar</button></form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Botão excluir -->
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#ModalExcluir<?php echo $linha['id']; ?>">
                                    Excluir
                                </button>
                            <!-- Modal excluir -->
                            <div class="modal fade" id="ModalExcluir<?php echo $linha['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">

                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Excluir Fornecedor</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="opcontato.php?acao=excluir&id=<?php echo $linha['id']; ?>" method="post">
                                        <h5>Tem certeza que deseja excluir o fornecedor?</h5>
                                        <label class="form-label"><strong>Razão Social:</strong> <?php echo $linha ['razao'];?></label><br>
                                        <label class="form-label"><strong>Nome Fantasia:</strong><?php echo $linha ['fantasia'];?></label><br>
                                        <label class="form-label"><strong>Endereço: </strong><?php echo $linha ['endereco'];?></label><br>
                                        <label class="form-label"><strong>E-mail: </strong><?php echo $linha ['email'];?></label><br>
                                        <label class="form-label"><strong>Telefone: </strong><?php echo $linha ['telefone'];?></label><br>
                                        
                                        </div>
                                        <div class="modal-footer">

                                        <!-- Botão excluir -->
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                            <a href="opfornecedor.php?acao=excluir&id=<?php echo $linha['id']; ?>" class="btn btn-danger" >Excluir</a>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>

</html>
