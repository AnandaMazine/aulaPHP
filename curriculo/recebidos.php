<?php
$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$dtnasc = $_POST['dtnasc'];
$linkedin = $_POST['linkedin'];

$curso = $_POST['curso'];
$instituicao = $_POST['instituicao'];
$ano = $_POST['ano'];

$cargo = $_POST['cargo'];
$empresa = $_POST['empresa'];
$inicio = $_POST['inicio'];
$fim = $_POST['fim'];
$descricao = $_POST['descricao'];
$cursos = $_POST['cursos'];
$habilidades = $_POST['habilidades'];
$idiomas = $_POST['idiomas'];
$proficiencia = $_POST['proficiencia'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recebidos</title>
        <style>
        body {
            margin: 30px;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            color: #873e23;
            background-color:#eeeee4;
            font-size: 15px;
            padding: 15px 20px;
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
            color:#eeeee4;
            border: none;
            margin-top: 20px;
            padding: 07px 30px;
            font-size: 16px;
            width: 100px;
            margin-left: 100px;
        }
    </style>
</head>
<body>
    <h1>Recebimento do Currículo</h1>
    <hr>
    <p><strong>Nome: </strong><?php echo $nome;?></p>
    <p><strong>Endereco: </strong><?php echo $endereco;?></p>
    <p><strong>E-mail: </strong><?php echo $email;?></p>
    <p><strong>Telefone: </strong><?php echo $telefone;?></p>
    <p><strong>Data de nascimento: </strong><?php echo $dtnasc;?></p>
    <p><strong>LinkedIn: </strong><?php echo $linkedin;?></p>

    <p><strong>Curso: </strong><?php echo $curso;?></p>
    <p><strong>Instituição: </strong><?php echo $instituicao;?></p>
    <p><strong>Ano de conclusão: </strong><?php echo $ano;?></p>

    <p><strong>Cargo: </strong><?php echo $cargo;?></p>
    <p><strong>Empresa: </strong><?php echo $empresa;?></p>
    <p><strong>Período Início: </strong><?php echo $inicio;?></p>
    <p><strong>Período Fim: </strong><?php echo $fim;?></p>
    <p><strong>Descrição das atividades realizadas: </strong><?php echo $descricao;?></p>


    <p><strong>Cursos: </strong><?php echo $cursos;?></p>
    <p><strong>Habilidates Técnicas: </strong><?php echo $habilidades;?></p>
    <p><strong>Idiomas: </strong><?php echo $idiomas;?></p>
    <p><strong>Nível de Proficiência do Idioma: </strong><?php echo $proficiencia;?></p>
    <hr>
    <a href="index.php?msg=ok">Voltar</a>    
    
</body>
</html>