<?php
    $clientes = ["Ana", "Maria", "João", "José", "Sueli"];
    echo $clientes[0],"<br>";
    echo $clientes[1],"<br>";
    echo $clientes[2],"<br>";
    echo $clientes[3],"<br>";
    echo $clientes[4],"<br><hr>";

    $cliente = [
        "nome" => "Ana",
        "sobrenome" =>"Souza",
        "email" => "ana@email.com",
    ];

echo "O nome da cliente é ".$cliente ["nome"];
echo "<br>";
echo "O sobrenome da cliente é ".$cliente ["sobrenome"];
echo "<br>";
echo "O e-mail da cliente é ".$cliente ["email"];
echo "<br><hr>";

$cadastro = [
    ["nome" => "Ana", "sobrenome" => "Souza", "email" => "ana@email.com", "foto" => "05.jpg"],
    ["nome" => "Maria", "sobrenome" => "Silva", "email" => "maria@email.com", "foto" => "06.jpg"],
    ["nome" => "João", "sobrenome" => "Rodrigues", "email" => "joao@email.com", "foto" => "07.jpg"],
    ["nome" => "José", "sobrenome" => "Santos", "email" => "jose@email.com", "foto" => "08.jpg"],
    ["nome" => "Sueli", "sobrenome" => "Pereira", "email" => "sueli@email.com", "foto" => "09.jpg"],
];

foreach($cadastro as $cliente){
    echo "<img src = '".$cliente ['foto']."'><br><strong>NOME: </strong>".$cliente ['nome']."<br><strong>SOBRENOME: </strong>".$cliente ['sobrenome']."<br><strong>EMAIL: </strong>".$cliente ['email']."<br><hr>";
};
?>