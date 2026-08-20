<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Criar conta</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h1>Criar conta</h1>

    <form action="cadastrar.php" method="POST">

        <input type="text" name="nome" placeholder="Nome" required>
        <br><br>

        <input type="email" name="email" placeholder="E-mail" required>
        <br><br>

        <input type="password" name="senha" placeholder="Senha" required>
        <br><br>

        <button type="submit">Criar conta</button>

    </form>

    <br>

    <a href="index.php">Já tenho uma conta</a>

</body>
</html>