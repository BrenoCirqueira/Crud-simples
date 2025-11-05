<?php
    require_once __DIR__ . "/../controllers/UsuarioController.php";
    $usuarioController = new UsuarioController();
    $listaUsuarios = $usuarioController->getAllUsers($_SERVER["REQUEST_METHOD"]);
    if (count($listaUsuarios)) {
        
        echo(
            "<table>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Data Nascimento</th>
                    </tr>
                </thead>
                <tbody>" // Boa prática: usar <tbody> para o corpo
        );
        foreach($listaUsuarios as $usuario) {  
            $nome = $usuario->getNome();
            $email = $usuario->getEmail();
            $nascimento = $usuario->getDataNascimento();
            $id = $usuario->getId();
            echo(
                "<tr>" . 
                    
                    "<td>" . htmlspecialchars($nome) . "</td>" .
                    "<td>" . htmlspecialchars($email) . "</td>" .
                    "<td>" . htmlspecialchars($nascimento) . "</td>" .
                    "<td>" .
                         "<form action='./excluirUsuario.php' method='GET'>
                            <input type='number' name='id' value='$id' hidden>
                            <button>Excluir</button>
                        </form>" .
                    "</td>" .
                "</tr>" 
            );
        }
        echo(
            "</tbody>
            </table>"
        );
    } else {
        echo("<b>Não há usuários registrados!</b>");
    }

?>
    <a href="javascript:history.go(-1)">Voltar</a>