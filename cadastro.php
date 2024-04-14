<?php
    use segundo\Database;

    require_once('config.php');
    require_once('libraries/Database.php');
    $database = new Database(MYSQL_CONFIG);
    
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        $dados_comprador = [
            ':nome' => $_POST['nome'],
            ':contato' => $_POST['contato'],
            ':endereco' => $_POST['endereco'],
            ':cidade' => $_POST['cidade'],
            ':estado' => $_POST['estado']
        ];
        $query = $database->execute_non_query("INSERT INTO dados_comprador (nome, contato, endereço, cidade, estado) VALUES (:nome, :contato, :endereco, :cidade, :estado)", $dados_comprador);

    } else {
        die("[ERRO] Conexão encerrada.");
    }
    
    



?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro do comprador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="d-flex align-items-center justify-content-center" style="height: 100vh; margin: 0;">
    <div class="alert alert-success text-center p-5" role="alert">
        <h1>Cadastro realizado com sucesso</h1>
        <button type="button" class="btn btn-lg btn-warning mt-5">Gerar Bilhete</button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

