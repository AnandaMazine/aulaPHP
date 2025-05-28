<?php
include "conexao.php";

if($_POST){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
}

// para cadastrar - se existir um get acao e getacao for igual a "cadastrar"
if(isset($_GET['acao']) && $_GET['acao'] == "cadastrar"){

    $sql = "INSERT INTO contatos (nome, email, telefone) VALUES (?, ?, ?)";
    $insert = $pdo->prepare($sql);
    $insert->bindValue(1, $nome);
    $insert->bindValue(2, $email);
    $insert->bindValue(3, $telefone);

    $insert->execute();

    header("Location:index.php");

}
// isset - se existir
// para excluir - se existir um get acao e getacao for igual a "excluir"
if(isset($_GET['acao']) && $_GET['acao'] == "excluir"){
    $id = $_GET['id'];

    $delete = $pdo->prepare("DELETE from contatos where id = ?");
    $delete->bindValue(1, $id);
    $delete->execute();
    
    header("Location:index.php");
}

// para editar - se existir um get acao e getacao for igual a "editar"
if(isset($_GET['acao']) && $_GET['acao'] == "editar"){
    $id = $_GET['id'];

    $sql= "UPDATE contatos set nome = ?, email = ?, telefone = ? where id = ?";
    $editar = $pdo->prepare($sql);
    $editar->bindValue(1, $nome);
    $editar->bindValue(2, $email);
    $editar->bindValue(3, $telefone);
    $editar->bindValue(4, $id);

    $editar->execute();

    header ("Location:index.php");
}

?>