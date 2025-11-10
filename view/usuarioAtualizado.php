<?php
    require_once __DIR__ . "/../controllers/UsuarioController.php";
    $usuarioController = new UsuarioController();
    $response = $usuarioController->updateUser($_SERVER["REQUEST_METHOD"]);
    echo($response);
    echo("<br><a href='./listaUsuario.php'> Lista Usuario </a>")
?>