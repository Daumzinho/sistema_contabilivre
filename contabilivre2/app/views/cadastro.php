<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Cadastrar Novo Usuário</h2>
        <form action="index.php?action=cadastrar" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>

            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="idade">Idade:</label>
                <input type="number" class="form-control" id="idade" name="idade" required>
            </div>

            <div class="form-group">
                <label for="data_nascimento">Data de Nascimento:</label>
                <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" required>
            </div>

            <div class="form-group">
                <label>Gênero:</label><br>
                <input type="radio" id="masculino" name="genero" value="Masculino">
                <label for="masculino">Masculino</label><br>
                <input type="radio" id="feminino" name="genero" value="Feminino">
                <label for="feminino">Feminino</label><br>
                <input type="radio" id="outro" name="genero" value="Outro">
                <label for="outro">Outro</label>
            </div>

            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <textarea class="form-control" id="descricao" name="descricao" rows="3" required></textarea>
            </div>

            <div class="form-group">
                <label for="foto">Foto de Perfil:</label>
                <input type="file" class="form-control" id="foto" name="foto" accept="image/*">
            </div>

            <div class="form-group">
                <label for="termos">Aceito os termos e condições:</label>
                <input type="checkbox" id="termos" name="termos" required>
            </div>

            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>

    <footer class="footer bg-light text-center py-3">
        <p>&copy; 2025 Sistema de Cadastro de Usuários</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
