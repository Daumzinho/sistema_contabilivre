<?php
session_start();


if (!isset($_SESSION['usuario'])) {
    header("Location: app/views/login.php");
    exit;
}


require_once 'app/config/database.php';


require_once 'app/controllers/UsuarioController.php';
require_once 'app/models/UsuarioModel.php';


$usuarioController = new UsuarioController($pdo);


if (isset($_GET['acao'])) {
    switch ($_GET['acao']) {
        case 'cadastrar':
            $usuarioController->cadastrar();
            break;
        case 'listar':
            $usuarioController->listar();
            break;
        case 'editar':
            $usuarioController->editar();
            break;
        case 'excluir':
            $usuarioController->excluir();
            break;
        default:
            $usuarioController->listar(); 
            break;
    }
} else {
   
    include 'app/views/dashboard.php';  
}
?>
