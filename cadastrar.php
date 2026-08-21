<?php

$servidor = "localhost";
$usuario = "root";
$senhaBanco = "";
$banco = "teste_login";

$conexao = new mysqli(
    $servidor,
    $usuario,
    $senhaBanco,
    $banco
);

if ($conexao->connect_error) {
    die("Erro ao conectar ao banco.");
}

$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];

$senhaHash = password_hash($senha, PASSWORD_DEFAULT);

$sql = "INSERT INTO usuarios (nome, email, senha)
        VALUES ('$nome', '$email', '$senhaHash')";

if ($conexao->query($sql) === TRUE) {

    echo "Conta criada com sucesso!<br>";
    echo '<a href="index.html">Ir para o login</a>';

} else {

    echo "Erro ao criar conta: " . $conexao->error;

}

$conexao->close();

?>