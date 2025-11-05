<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./usuarioCriado.php" method="POST">
        <label for="nome">nome: </label>
        <input type="text" name="nome_usuario" id="nome">
        <br>
        <label for="email">email: </label>
        <input type="text" name="email_usuario" id="email">
        <br>
        <label for="senha">senha: </label>
        <input type="password" name="senha_usuario" id="senha">
        <br>
        <label for="data_nascimento">data_nascimento: </label>
        <input type="date" name="data_nascimento_usuario" id="data_nascimento">
        <br>
        <button>Criar</button>
    </form>
    <a href="javascript:history.go(-1)">Voltar</a>
</body>
</html>