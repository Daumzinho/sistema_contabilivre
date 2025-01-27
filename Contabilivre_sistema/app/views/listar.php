
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Usuários</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Lista de Usuários Cadastrados</h2>
        <form method="GET" action="index.php">
        <input type="text" class="form-control" name="pesquisa" id="pesquisa" placeholder="Pesquisar por nome ou e-mail" value="<?= isset($_GET['pesquisa']) ? $_GET['pesquisa'] : '' ?>" />
        <button type="submit" class="btn btn-primary mt-2">Pesquisar</button>
    </form>


        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Idade</th>
                    <th>Data de Nascimento</th>
                    <th>Gênero</th>
                    <th>Foto</th>
                    <th>Observações</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuarios as $usuario): ?>
                    <tr>
                        <td><?= $usuario['id'] ?></td>
                        <td><?= $usuario['nome'] ?></td>
                        <td><?= $usuario['email'] ?></td>
                        <td><?= $usuario['idade'] ?></td>
                        <td><?= $usuario['data_nascimento'] ?></td>
                        <td><?= $usuario['genero'] ?></td>
                        <td><img src="app/uploads/<?= $usuario['foto'] ?>" alt="Foto" width="50"></td>
                        <td><?= $usuario['observacoes'] ?></td>
                        <td>
                            <a href="index.php?acao=editar&id=<?= $usuario['id'] ?>" class="btn btn-warning btn-sm">Editar</a>
                            <a href="index.php?acao=excluir&id=<?= $usuario['id'] ?>" class="btn btn-danger btn-sm">Excluir</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <a href="index.php" class="btn btn-primary">Voltar</a>
    </div>
</body>
</html>
