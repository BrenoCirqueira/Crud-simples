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
        <form action="./usuarioExcluido.php" method="POST">
            <label for="id_usuario">ID usuario: </label>
            <input type="text" name="id_usuario" id="id">
            <button>Deletar</button>
        </form>
        <a href="javascript:history.go(-1)">Voltar</a>
    </main>
</body>
</html>