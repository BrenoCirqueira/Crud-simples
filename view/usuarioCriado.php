<?php
    require_once __DIR__ . "/../controllers/UsuarioController.php";
    $usuarioController = new UsuarioController();
    echo("Page usuario Criado <br>");
    $usuarioController->create($_SERVER["REQUEST_METHOD"]);
?>