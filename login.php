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

$email = $_POST["email"];
$senha = $_POST["senha"];

$sql = "SELECT * FROM usuarios WHERE email = '$email'";

$resultado = $conexao->query($sql);

if ($resultado->num_rows > 0) {

    $usuario = $resultado->fetch_assoc();

    if (password_verify($senha, $usuario["senha"])) {

        echo "Login realizado!<br>";
        echo "Bem-vindo, " . $usuario["nome"] . "!";

    } else {

        echo "Senha incorreta.";

    }

} else {

    echo "Usuário não encontrado.";

}

$conexao->close();

?>