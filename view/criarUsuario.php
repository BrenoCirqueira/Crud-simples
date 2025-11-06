<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Usuario</title>
    <link rel="stylesheet" href="../assets/css/create.css">
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.7.0/fonts/remixicon.css"
    rel="stylesheet"
/>
</head>
<body>
    <header><i class="ri-php-fill"></i><p id="logo">Breno Cirqueira 2025</p></header>
    <main> 
    <form action="./usuarioCriado.php" method="POST">
        <div id="forms">
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
        </div>
    </form>
    <a href="javascript:history.go(-1)">Voltar</a>
    </main>
</body>
</html>