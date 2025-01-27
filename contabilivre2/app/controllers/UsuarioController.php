<?php
include_once('../models/Usuario.php');

class UsuarioController {

    public function cadastrar() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $idade = $_POST['idade'];
            $data_nascimento = $_POST['data_nascimento'];
            $genero = $_POST['genero'];
            $descricao = $_POST['descricao'];
            $termos = isset($_POST['termos']) ? 1 : 0;

        
            $foto = NULL;
            if ($_FILES['foto']['error'] == UPLOAD_ERR_OK) {
                $foto = $_FILES['foto']['name'];
                move_uploaded_file($_FILES['foto']['tmp_name'], "../uploads/" . $foto);
            }

            $cadastrado = Usuario::cadastrar($nome, $email, $idade, $data_nascimento, $genero, $descricao, $foto, $termos);

            if ($cadastrado) {
                header('Location: listar.php');
            } else {
                echo "Erro ao cadastrar usuário.";
            }
        }
        include('../views/cadastro.php');
    }

    public function listar() {
        $usuarios = Usuario::listar();
        include('../views/listar.php');
    }

    public function editar() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_POST['id'];
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $atualizado = Usuario::editar($id, $nome, $email, $senha);

            if ($atualizado) {
                header('Location: listar.php');
            } else {
                echo "Erro ao atualizar usuário.";
            }
        } else {
            $id = $_GET['id'];
            $usuario = Usuario::buscarPorId($id);
            include('../views/editar.php');
        }
    }

    public function excluir() {
        $id = $_GET['id'];
        Usuario::excluir($id);
        header('Location: listar.php');
    }
}
?>
