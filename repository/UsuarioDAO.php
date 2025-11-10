<?php
    require_once __DIR__ . "/../models/Usuario.php";
    require_once __DIR__ . "/../others/Connection.php";
    class UsuarioDAO {
        private PDO $pdo;

        public function __construct() {            
            $conn = new Connection();
            $this->pdo = $conn->createConn();

            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        public function createUser(Usuario $usuario) {
            echo "Estou em USUARIO DAO <br>";
            echo $usuario->getNome();
            $sql = "INSERT INTO usuario (
                nome_usuario,
                senha_usuario,
                email_usuario,
                data_nasc_usuario
            ) VALUES (
                :nome_usuario,
                :senha_usuario,
                :email_usuario,
                :data_nascimento_usuario
            )";
            
            try {
                $stmt = $this->pdo->prepare($sql);
                $nome = $usuario->getNome();
                $senha = $usuario->getSenha();
                $email = $usuario->getEmail();
                $data = $usuario->getDataNascimento();
                $stmt->bindParam(":nome_usuario", $nome);
                $stmt->bindParam(":senha_usuario", $senha);
                $stmt->bindParam(":email_usuario", $email);
                $stmt->bindParam(":data_nascimento_usuario", $data);
                $stmt->execute();              
                return true;
            } catch (PDOException $e) {                
                echo "Erro ao criar usuário: " . $e->getMessage();                
            }
            
        }
        public function getAlluser() {
            try {
                $sql = "SELECT * FROM usuario LIMIT 200";
                $stmt = $this->pdo->prepare($sql);
                $stmt->execute();
                $usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
                $novoUsuario = [];
               
                foreach($usuarios as $usuario){
                    $id = $usuario["id_usuario"];
                    $nome = $usuario["nome_usuario"];
                    $senha = $usuario["senha_usuario"];
                    $email = $usuario["email_usuario"];
                    $dataNascimento = $usuario["data_nasc_usuario"];
                    array_push(
                        $novoUsuario,
                        new Usuario($id, $nome, $senha, $email, $dataNascimento)
                    );
                }
                return $novoUsuario;
            } catch (PDOException $e) {
                echo("error | erro na camada repository" . $e->getMessage());
                return [];
            }
        }

        public function deleteUser ($id) {
            try {
                $sql = "DELETE FROM usuario WHERE id_usuario = :id";
                $stmt = $this->pdo->prepare($sql);
                $stmt->bindValue(':id' , $id , PDO::PARAM_INT);
                $stmt->execute();
            } catch (PDOException $e) {
                $sql = "SELECT nome_usuario FROM usuario WHERE id_usuario = :id";
                $stmt = $this->pdo->prepare($sql);
                $stmt->bindValue(':id' , $id , PDO::PARAM_INT);
                $stmt->execute();
                $stmt->setFetchMode(PDO::FETCH_ASSOC);
                $usuario = $stmt->fetch();
                echo ("Erro  deletar o usuario " . $usuario['nome_usuario'] . $e->getMessage());
            }
        }

        public function updateUser(Usuario $usuario) {
            try{
                $sql = "UPDATE usuario 
                    SET                         
                        nome_usuario = :nome_usuario,
                        data_nasc_usuario = :data_nasc_usuario,
                        email_usuario = :email_usuario
                    WHERE id_usuario = :id_usuario
                ";
                $stmt = $this->pdo->prepare($sql);
                $id = $usuario->getId();
                $nome = $usuario->getNome();
                $email = $usuario->getEmail();
                $dataNasc = $usuario->getDataNascimento();
                $stmt->bindValue(":nome_usuario",$nome);
                $stmt->bindValue(":email_usuario",$email);
                $stmt->bindValue(":data_nasc_usuario",$dataNasc);
                $stmt->bindValue(":id_usuario",$id);
                $stmt->execute();
                return "Usuario atualizado com sucesso";
            }catch (PDOException $e) {
                echo("Error: " . $e->getMessage());
            }
        }
    }
?>