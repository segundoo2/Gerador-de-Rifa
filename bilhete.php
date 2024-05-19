<?php 
  use segundo\Database;

  require_once('config.php');
  require_once('libraries/Database.php');
  $database = new Database(MYSQL_CONFIG);
  
  $dados = $database->execute_query("SELECT * FROM dados_comprador ORDER BY numero_bilhete DESC LIMIT 1");
  print_r($dados);
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bilhete gerado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        header {
            background-image: linear-gradient(-45deg, #74d25f, #127f0b);
        }

        footer {
            color: lightgray;
        }

        span {
            font-weight: bold;
        }

        .bilhete {
          border-radius: 10px;
          background-image: linear-gradient(-45deg, #af68a0, #5e1d52);
        }
    </style>
  </head>
  <body>
    <header>
        <h3 class="text-center text-light p-5 fw-bolder fs-1">Bilhete gerado com sucesso!</h3>
    </header>
   
    <main class="container mt-5">

      <div class="m-auto p-1 w-50 bg-secondary bilhete">
        <h6 class="m-3 text-justify text-light">
          <span class="d-flex justify-content-end mx-5">N°: <?= $dados[0]['numero_bilhete'] ?> <br></span>
          Nome: <br>
          
          <hr>
          Contato: <br>
          <hr>
          Endereço: <br>
          <hr>
          Cidade: <br>
          <hr>
          Estado: <br>
          <hr>
        </h6>
      </div>

    </main>
   
    <footer class="text-center mt-5">
        <h6>Desenvolvido por: <span>Edilson Segundo</span></h6>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>