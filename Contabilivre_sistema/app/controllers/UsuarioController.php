<?php
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../models/UsuarioModel.php';



class UsuarioController {
    private $usuarioModel;

    public function __construct($pdo) {
        $this->usuarioModel = new Usuario($pdo);
    }

    public function cadastrar() {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $idade = $_POST['idade'];
        $data_nascimento = $_POST['data_nascimento'];
        $foto = $_FILES['foto']['name'];
        $genero = $_POST['genero'];
        $termos = isset($_POST['termos']) ? 1 : 0;
        $observacoes = $_POST['observacoes'];

        
        $caminho_upload = __DIR__ . '/../uploads/' . $foto;

        
        if ($_FILES['foto']['error'] == UPLOAD_ERR_OK) {
            if (move_uploaded_file($_FILES['foto']['tmp_name'], $caminho_upload)) {
            } else {
                echo "Erro ao mover o arquivo.";
            }
        }

        
        $this->usuarioModel->criar($nome, $email, $idade, $data_nascimento, $foto, $genero, $termos, $observacoes);
        
       
        header("Location: dashboard.php");
        exit;
    }

    
    include __DIR__ . '/../views/cadastro.php';
}


    
    public function listar() {
        $usuarios = $this->usuarioModel->listar();
        include 'app/views/listar.php';
    }

    public function editar() {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $usuario = $this->usuarioModel->buscarPorId($id);
    
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                
                $nome = $_POST['nome'];
                $email = $_POST['email'];
                $idade = $_POST['idade'];
                $data_nascimento = $_POST['data_nascimento'];
                $foto = $_FILES['foto']['name'] ? $_FILES['foto']['name'] : $usuario['foto']; // Se não enviar foto, mantém a antiga
                $genero = $_POST['genero'];
                $termos = isset($_POST['termos']) ? 1 : 0;
                $observacoes = $_POST['observacoes'];
    
                
                if ($_FILES['foto']['error'] == UPLOAD_ERR_OK) {
                    $caminho_upload = __DIR__ . '/../uploads/' . $foto;
                    move_uploaded_file($_FILES['foto']['tmp_name'], $caminho_upload);
                }
    
                
                $this->usuarioModel->atualizar($id, $nome, $email, $idade, $data_nascimento, $foto, $genero, $termos, $observacoes);
    
             
                header('Location: index.php?acao=listar');
                exit();
            }
    
            include 'app/views/editar.php';
        }
    }
    


    public function excluir() {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $this->usuarioModel->excluir($id);

            
            header('Location: index.php?acao=listar');
            exit();
        }
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $usuario = $_POST['usuario'];
            $senha = $_POST['senha'];
    
         
            if ($usuario === 'admin' && $senha === 'admin') {
                $_SESSION['usuario'] = $usuario;
                header("Location: /agora/app/views/dashboard.php");  // Redireciona para o dashboard com os botões
                exit;
            } else {
                header("Location: app/views/login.php?erro=1");
                exit;
            }
        }
    }

    public function buscar() {
       
        $pesquisa = isset($_GET['pesquisa']) ? $_GET['pesquisa'] : null;

       
        $usuarios = $this->usuarioModel->buscarUsuarios($pesquisa);

        
        include __DIR__ . '/../views/listar.php';
    }
    
}
?>
