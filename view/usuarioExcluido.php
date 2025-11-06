<?php
    require_once __DIR__ . "/../controllers/UsuarioController.php";
    $usuarioController = new UsuarioController();
    echo("Page usuario Deletado <br>");
    $usuarioController->deleteUser($_SERVER["REQUEST_METHOD"]);
?>