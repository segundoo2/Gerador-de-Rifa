<?php
    include('Class/ClassConexao.php');

    $dados_comprador = [
        ':nome' => $_POST['nome'],
        ':contato' => $_POST['contato'],
        ':endereco' => $_POST['endereco'],
        ':cidade' => $_POST['cidade'],
        ':estado' => $_POST['estado']
    ];

    $sql-> prepare("INSERT INTO dados_comprador (nome_comprador, contato_comprador, endereço_comprador, cidade_comprador, estado_comprador) VALUES (':nome', ':contato', ':endereco', ':cidade', ':estado')");
    $sql -> bindParam(':nome', $dados_comprador[':nome'], PDO::PARAM_STR);
    $sql -> bindParam(':nome', $dados_comprador[':contato'], PDO::PARAM_STR);
    $sql -> bindParam(':nome', $dados_comprador[':endereco'], PDO::PARAM_STR);
    $sql -> bindParam(':nome', $dados_comprador[':cidade'], PDO::PARAM_STR);
    $sql -> bindParam(':nome', $dados_comprador[':estado'], PDO::PARAM_STR);
    $sql -> execute();


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="d-flex align-items-center justify-content-center" style="height: 100vh; margin: 0;">
    <?php if($_SERVER['REQUEST_METHOD'] == 'POST'): ?>
        <div class="alert alert-success text-center p-5" role="alert">
            <h1>Cadastro realizado com sucesso</h1>
            <button type="button" class="btn btn-lg btn-warning mt-5">Gerar Bilhete</button>

        </div>
    <?php else: ?>
        <div class="alert alert-danger d-flex justify-content-center align-items-center" role="alert">
            <p>[Erro] Não foi possível realizar a requisição. Volte para a página de cadastro clicando <a href="index.php">aqui</a>.</p>
        </div>
    <?php endif; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

