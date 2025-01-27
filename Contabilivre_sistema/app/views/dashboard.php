<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Controle</title>
    
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        
        body {
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: white;
            border-radius: 8px;
            padding: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }
        .logo {
            width: 120px;
            margin-bottom: 20px;
        }
        .btn-block {
            margin-top: 15px;
        }
    </style>
</head>
<body>

    <div class="container">
       
        <img src="https://media.licdn.com/dms/image/v2/C4D0BAQHQqnJ9efdh3Q/company-logo_200_200/company-logo_200_200/0/1671106814127/contabilivre_logo?e=2147483647&v=beta&t=YRcOYlivHSnO1_JeZmpTAiRM1bolzTfXO6hgKDOD8aM" alt="Logo da Empresa" class="logo">
        
        <h1 class="mb-4">Sistema de Cadastro</h1>

        <div class="row">
        <div class="col-12">
            
            <a href="app/views/cadastro.php" class="btn btn-primary btn-block">Cadastro</a>

        </div>
        <div class="col-12">
            
            <a href="listar.php" class="btn btn-secondary btn-block">Listar</a>
        </div>
        <div class="col-12">
           
            <a href="logout.php" class="btn btn-danger btn-block">Sair</a>
        </div>
    </div>
</div>

    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
