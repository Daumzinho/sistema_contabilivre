<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #97e901;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }

        .login-container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            width: 100%;
            max-width: 400px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        .form-control {
            margin-bottom: 15px;
        }

        .btn-login {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
        }

        .btn-login:hover {
            background-color: #218838;
        }
     
    </style>
</head>
<body>
<div class="login-container text-center">
    <img src="data:image/jpeg;base64,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" alt="" class="img-fluid mx-auto d-block">
    <h3 class="text-center mb-4">Login</h3>
    <form action="login.php" method="POST">
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" class="form-control" placeholder="Digite seu e-mail" required>
        </div>
        <div class="form-group">
            <label for="senha">Senha</label>
            <input type="password" id="senha" name="senha" class="form-control" placeholder="Digite sua senha" required>
        </div>
        <button type="submit" class="btn-login">Entrar</button>
    </form>
</div>

</body>
</html>
