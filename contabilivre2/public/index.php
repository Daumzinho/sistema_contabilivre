<?php
session_start();

$action = $_GET['action'] ?? 'login';

if ($action === 'login') {
    require_once 'app/controllers/LoginController.php';
    $controller = new LoginController();
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $controller->login();
    } else {
        $controller->showLogin();
    }
} elseif ($action === 'logout') {
    require_once 'app/controllers/LoginController.php';
    $controller = new LoginController();
    $controller->logout();
} elseif (in_array($action, ['listar', 'cadastrar', 'editar', 'excluir'])) {
    require_once 'app/controllers/UsuarioController.php';
    $controller = new UsuarioController();
    switch ($action) {
        case 'listar':
            $controller->listar();
            break;
        case 'cadastrar':
            $controller->cadastrar();
            break;
        case 'editar':
            $controller->editar();
            break;
        case 'excluir':
            $controller->excluir();
            break;
    }
} else {
    echo "Ação não encontrada.";
}
