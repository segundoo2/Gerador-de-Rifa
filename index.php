<?php
include("Class/ClassConexao.php");
$conexao = new ClassConexao();
$conexao->conectaDB();

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro do comprador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        .titulo{
            box-shadow: 0px 0px 1px black;
            border-radius: 5px;
            background-color: lightgrey;
        }
    </style>
</head>

<body>

    <div class="container">
        <form action="cadastro.php" method="post">
            <h3 class="text-center mt-5 p-5 titulo">Cadastro Comprador</h3>
            <div class="row mt-3">
                <div class="col">
                    <label for="nome">Nome completo</label>
                    <input type="text" class="form-control" name="nome">
                </div>
            </div>
            <div class="row">
                <div class="col w-25">
                    <label for="contato">Contato</label>
                    <input type="text" class="form-control" name="contato">
                </div>
                <div class="col w-50">
                    <label for="endereco">Endereço</label>
                    <input type="text" class="form-control" name="endereco">
                </div>
            </div>

            <div class="row">
                <div class="col w-25">
                    <label for="estado">Cidade</label>
                    <input type="text" class="form-control" name="cidade" value="Natal" disabled>
                </div>
                    
                <div class="col">
                    <label for="estado">Estado</label>
                    <input type="text" class="form-control" name="estado" value="RN" disabled>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col d-flex justify-content-center mt-3">
                    <button type="submit" class="btn btn-success w-25">Cadastrar comprador</button>
                </div>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>