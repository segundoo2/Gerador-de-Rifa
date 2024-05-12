<?php

use segundo\Database;

require_once('config.php');
require_once('libraries/Database.php');
$database = new Database(MYSQL_CONFIG);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $contato = $_POST['contato'];
    $endereco = $_POST['endereco'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];

    $erroMensagem = [];

    if (empty($nome) || empty($contato) || empty($endereco) || empty($cidade) || empty($estado)) {
        $erroMensagem = 'Todos os campos são obrigatórios';
    } elseif (strlen($nome) > 1000 || strlen($contato) > 17 || strlen($endereco) > 1000 || strlen($cidade) > 500 || strlen($estado) > 2) {
        $erroMensagem = 'ERRO: Campos invalidos!';
    } else {
        $params = [
            ':nome' => $nome,
            ':contato' => $contato,
            ':endereco' => $endereco,
            ':cidade' => $cidade,
            ':estado' => $estado
        ];
        $query = $database->execute_non_query("INSERT INTO dados_comprador (nome, contato, endereço, cidade, estado) VALUES (:nome, :contato, :endereco, :cidade, :estado)", $params);
    }
} else {
    die("[ERRO] Conexão encerrada.");
}
?>

<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro do comprador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        header {
            background-image: linear-gradient(-45deg, #3a4600, #fbff00);
            
        }

        #estado {
            width: 60px;
        }

        footer {
            background-image: linear-gradient(-45deg, #3a4600, #fbff00);
            padding: 77px;
            color: lightgray;
        }
        span {
            font-weight: bold;
        }
    </style>
</head>

<body>

    <?php if (empty($erroMensagem)) : ?>
        <div class="alert alert-success text-center p-5 mt-5" role="alert">
            <h1>Cadastro realizado com sucesso</h1>
            <a href="/bilhete.php">
                <button type="button" class="btn btn-lg btn-warning mt-5">Gerar Bilhete</button>
            </a>
        </div>
    <?php else : ?>
        <header>
            <h3 class="text-center text-light p-5 fw-bolder fs-1">Cadastro Comprador</h3>
        </header>
        <div class="container">

            <form action="cadastro.php" method="post">
                <div class="row mt-3">
                    <div class="col">
                        <label for="nome">Nome completo</label>
                        <input type="text" class="form-control" name="nome">
                    </div>
                </div>

                <div class="row">
                    <div class="col w-25">
                        <label for="contato">Contato</label>
                        <input type="text" class="form-control" name="contato" oninput="formatarNumero(this)">
                    </div>
                    <div class="col w-50">
                        <label for="endereco">Endereço</label>
                        <input type="text" class="form-control" name="endereco">
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="cidade">Cidade</label>
                        <input type="text" class="form-control" name="cidade" value="Natal">
                    </div>

                    <div class="col">
                        <label for="estado">Estado</label>
                        <input type="text" class="form-control" id="estado" name="estado" value="RN">
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col d-flex justify-content-center mt-3">
                        <button type="submit" class="btn btn-lg btn-success w-25">Cadastrar comprador</button>
                    </div>
                </div>
                <div class="alert alert-danger mt-3 text-center" role="alert">
                    <?= $erroMensagem ?>
                </div>
            </form>
            
        </div>

        <footer class="text-center mt-5">
            <h6>Desenvolvido por: <span>Edilson Segundo</span></h6>
        </footer>
    <?php endif; ?>

    <script src="assets/js/formatarNumero.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>