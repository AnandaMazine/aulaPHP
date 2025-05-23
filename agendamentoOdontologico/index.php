<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo à TechSmile!</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <form action="recebimento.php" method="post">
    <h1 style="text-align:center">Bem-vindo à TechSmile!</h1>

    <h3 style="text-align:center">Para agendar sua consulta, preencha o formulário abaixo:</h3>
    <label><b>Digite o seu nome completo: </b></label>
    <input type="text" name="nome"><br>
    <label><b>Selecione o seu gênero:</b></label>
    <div class="grupo">
        <input type="radio" name="genero" value="Masculino">Masculino
        <input type="radio" name="genero" value="Feminino">Feminino
        <input type="radio" name="genero" value="Neutro">Neutro
    </div>

    <label><b>Escolha o seu Especialista:</b></label>
    <div class="grupo">
        <input type="radio" name="dentista" value="Álvaro da Silva"> Álvaro da Silva
        <input type="radio" name="dentista" value="Silva Martins"> Silva Martins
        <input type="radio" name="dentista" value="Lucio Otávio"> Lucio Otávio
    </div>

    <label><b>Selecione o(s) seu(s) serviço(s):</b></label>
    <div class="grupo">
        <input type="checkbox" name="servicos[]" value="Limpeza">Limpeza
        <input type="checkbox" name="servicos[]" value="Clareamento">Clareamento
        <input type="checkbox" name="servicos[]" value="Ortodontia">Ortodontia
        <input type="checkbox" name="servicos[]" value="Prótese">Prótese
        <input type="checkbox" name="servicos[]" value="Canal">Canal
    </div>

    <label><b>Selecione a melhor data para a sua consulta:</b></label>
    <input type="date" name="data">
    <label><b>Selecione o melhor horário para a sua consulta:</b></label>
    <input type="time" name="horario">
    <input type="submit" name="Enviar">
    </form>
    
</body>
</html>