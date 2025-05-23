<?php
if (isset($_GET['msg']) && $_GET['msg'] == "ok") {
    echo "<h1>Dados enviados com sucesso!</h1>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envio do Currículo</title>
    <style>
        body {
            margin: 30px;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            color: #873e23;
            background-color: #eeeee4;
            font-size: 15px;
            padding: 30px;
            text-align: left;
        }

        label {
            display: block;
            margin-top: 20px;
            color: #873e23;
        }

        input {
            width: 350px;
        }

        input[type="submit"] {
            background-color: #873e23;
            color: #eeeee4;
            border: none;
            margin-top: 20px;
            padding: 07px 30px;
            font-size: 16px;
            width: 150px;;
            text-align:center;
            margin-left: 120px;
        }

        form {
            background: white;
            padding: 20px;
            border-radius: 10px;
            width: 400px;
            margin: 0 auto;
        }
    </style>
</head>

<body><form action="recebidos.php" method="post">
        <h1 style="text-align:center">Informações Pessoais</h1>
        <label>Nome Completo:</label><input type="text" name="nome"><br>
        <label>Endereço:</label><input type="text" name="endereco"><br>
        <label>E-mail:</label><input type="email" name="email"><br>
        <label>Telefone:</label><input type="text" name="telefone"><br>
        <label>Data de Nascimento:</label><input type="date" name="dtnasc" style="width: 352px";><br>
        <label>LinkedIn(opcional):</label><input type="text" name="linkedin"><br>

        <h1 style="text-align:center">Formação Acadêmica</h1>
        <label>Curso:</label><input type="text" name="curso"></br>
        <label>Instituição:</label><input type="text" name="instituicao"><br>
        <label>Ano de conclusão:</label><input type="date" name="ano" style="width: 352px";><br>

        <h1 style="text-align:center">Experiência Profissional</h1>
        <label>Cargo:</label><input type="text" name="cargo"></br>
        <label>Empresa:</label><input type="text" name="empresa"><br>
        <label>Período (Início):</label><input type="date" name="inicio" style="width: 352px";><br>
        <label>Período (Fim):</label>
        <input type="date" name="fim" style="width: 352px";><br>
        <label>Descrição das atividades realizadas:</label><input type="text" name="descricao" style="height: 60px";><br>

        <h1 style="text-align:center">Qualificações Complementares</h1>
        <label>Cursos:</label><input type="text" name="cursos"></br>
        <label>Habilidates Técnicas:</label><input type="text" name="habilidades"><br>
        <label>Idiomas:</label><input type="text" name="idiomas"><label for="proficiencia">Nível de proficiência:</label>
        <select id="proficiencia" style="width: 359px; height: 23px" name="proficiencia">
            <option value="">Selecione</option>
            <option value="iniciante">Iniciante</option>
            <option value="basico">Básico</option>
            <option value="intermediario">Intermediário</option>
            <option value="avancado">Avançado</option>
            <option value="fluente">Fluente</option>
            <option value="nativo">Nativo</option>
        </select>
        <br>
        <input type="submit" value="Enviar">

    </form>
</body>

</html>