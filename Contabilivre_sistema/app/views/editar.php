<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Editar Usuário</h2>

        <form action="index.php?acao=editar&id=<?= $usuario['id'] ?>" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" value="<?= $usuario['nome'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?= $usuario['email'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="idade" class="form-label">Idade</label>
                <input type="number" class="form-control" id="idade" name="idade" value="<?= $usuario['idade'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="data_nascimento" class="form-label">Data de Nascimento</label>
                <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" value="<?= $usuario['data_nascimento'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="foto" class="form-label">Foto</label>
                <input type="file" class="form-control" id="foto" name="foto">
                <img src="app/uploads/<?= $usuario['foto'] ?>" alt="Foto" width="100" class="mt-2">
            </div>
            <div class="mb-3">
                <label class="form-label">Gênero</label><br>
                <input type="radio" name="genero" value="Masculino" <?= $usuario['genero'] == 'Masculino' ? 'checked' : '' ?>> Masculino
                <input type="radio" name="genero" value="Feminino" <?= $usuario['genero'] == 'Feminino' ? 'checked' : '' ?>> Feminino
            </div>
            <div class="mb-3">
                <label for="observacoes" class="form-label">Observações</label>
                <textarea class="form-control" id="observacoes" name="observacoes"><?= $usuario['observacoes'] ?></textarea>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="termos" name="termos" <?= $usuario['termos'] ? 'checked' : '' ?>>
                <label class="form-check-label" for="termos">Aceito os termos</label>
            </div>
            <button type="submit" class="btn btn-primary">Atualizar</button>
        </form>

        <a href="index.php?acao=listar" class="btn btn-secondary mt-3">Voltar</a>
    </div>
</body>
</html>
