<?php
    require_once __DIR__ . "/../repository/UsuarioDAO.php";
    require_once __DIR__ . "/../models/Usuario.php";
    class UsuarioController {
        private UsuarioDAO $dao;
        public function __construct() {
            $this->dao = new UsuarioDAO();
        }

        public function create(string $method) {
            
            if ($method === "POST") {
                $usuario = new Usuario(
                    0,
                    htmlspecialchars($_POST["nome_usuario"]),
                    htmlspecialchars($_POST["senha_usuario"]),
                    htmlspecialchars($_POST["email_usuario"]),
                    htmlspecialchars($_POST["data_nascimento_usuario"])
                );                
                $response = $this->dao->createUser($usuario);
                if ($response) {
                    return "Usuário Cadastrado com Sucesso";
                } else {
                    return "Problema na criação do usuário";
                }
            }
        }

        public function getAllUsers(string $method) {
            if ($method === "GET") {
                $response = $this->dao->getAllUser();
                if (count($response)) {
                    return $response;
                }
            }
            return [];
        }

    public function deleteUser(string $method) {
        if ($method === "POST") {
            $response = $this->dao->deleteUser($_POST['id_usuario']);
            
        } 
    }

        
    }
?>