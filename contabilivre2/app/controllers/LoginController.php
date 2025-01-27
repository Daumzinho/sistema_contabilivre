<?php
class LoginController {
    public function showLogin() {
        include('../views/login.php');
    }

    public function login() {
        $email = $_POST['email'] ?? '';
        $senha = $_POST['senha'] ?? '';

        
        if ($email === 'admin@admin.com' && $senha === 'admin') {
            $_SESSION['usuario'] = 'admin';
            header('Location: index.php?action=listar'); 
            exit;
        }

        
        require_once '../models/Usuario.php';
        $usuario = Usuario::login($email, $senha);

        if ($usuario) {
            $_SESSION['usuario'] = $usuario;
            header('Location: index.php?action=listar');
        } else {
            echo "<p>Usuário ou senha inválidos!</p>";
        }
    }

    public function logout() {
        session_destroy();
        header('Location: index.php?action=login');
    }
}
