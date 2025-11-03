<?php 
    require_once __DIR__ . "/../model/Usuario.php";
    require_once __DIR__ . "/../others/Connection.php";
    class UsuarioDAO extends Usuario {
        private PDO $pdo;

        public function __construct() {
            $pdo = $this->createConn();
        }
        
        function public createUser(Usuario $usuario) {
            $sql = "INSERT INTO usuario (
                nome_usuario,
                senha_usuario,
                email_usuario,
                data_nasc_usuario
            ) VALUES (
                :nome_usuario,
                :senha_usuario,
                :email_usuario,
                :data_nasc_usuario
            )";

            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":nome_usuario", $usuario->getNome());
            $stmt->bindParam(":senha_usuario", $usuario->getSenha());
            $stmt->bindParam(":email_usuario", $usuario->getEmail());
            $stmt->bindParam(":data_nasc_usuario", $usuario->getDataNascimento());
            
            $stmt->execute();
        }


     }
?>