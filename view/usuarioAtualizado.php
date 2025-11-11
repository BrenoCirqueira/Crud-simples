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
        <?php
            require_once __DIR__ . "/../controllers/UsuarioController.php";
            $usuarioController = new UsuarioController();
            $response = $usuarioController->updateUser($_SERVER["REQUEST_METHOD"]);
            echo($response);
            echo("<br><a href='./listaUsuario.php'> Lista Usuario </a>")
        ?>
    </main>    
</body>
</html>
