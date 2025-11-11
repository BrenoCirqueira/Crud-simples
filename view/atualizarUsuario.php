<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets//css/usuarioCriado.css">
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.7.0/fonts/remixicon.css"
    rel="stylesheet"
/>
</head>
<body>
    <header><i class="ri-php-fill"></i><p id="logo">Breno Cirqueira 2025</p></header>
    <main>
        <form id="formularioAtualizar" action="./usuarioAtualizado.php" method="POST">
            <div>
                <label for="nome">nome: </label>
                <input type="text" name="nome_usuario" id="nome" <?php echo "value=" . $_POST['nome_usuario']?>>
            </div>
            <br>
            <div>
                <label for="email">email: </label>
                <input type="text" name="email_usuario" id="email"  <?php echo "value=" . $_POST["email_usuario"]?>>
            </div>
            <!-- <br>
            <label for="senha">senha: </label>
            <input type="password" name="senha_usuario" id="senha"> -->
            <br>
            <div>
                <label for="data_nascimento">data_nascimento: </label>
                <input type="date" name="data_nascimento_usuario" id="data_nascimento" <?php echo "value=" . $_POST["data_nascimento_usuario"]?>>        
            </div>
            <br>
            <div>
                <input type="number" name="id_usuario" <?php echo "value=" . $_POST['id_usuario']?> hidden>
            </div>
            <button>Atualizar</button>
        </form>
        <a href="javascript:history.go(-1)">Voltar</a> 
    </main>
</body>
</html>