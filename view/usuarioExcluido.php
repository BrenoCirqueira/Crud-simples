

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario Criado</title>
    <link rel="stylesheet" href="../assets/css/usuarioCriado.css">
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
            echo("Page usuario Deletado <br>");
            $usuarioController->deleteUser($_SERVER["REQUEST_METHOD"]);
        ?>
         <a href="javascript:history.go(-1)">Voltar</a>
    </main>
</body>
</html>