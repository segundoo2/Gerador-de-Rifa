<?php

use segundo\Database;

require_once('config.php');
require_once('libraries/Database.php');
$database = new Database(MYSQL_CONFIG);

$dados = $database->execute_query(
  "SELECT * 
    FROM dados_comprador 
    ORDER BY numero_bilhete DESC LIMIT 1"
);

?>

<?php require_once("header.php"); ?>

<style>
  .bilhete {
    border-radius: 10px;
    background-image: linear-gradient(-45deg, #af68a0, #5e1d52);
  }
</style>

<body>
  
  <main class="container mt-5">

    <div class="m-auto p-1 w-50 bg-secondary bilhete" name="bilhete">
      <h6 class="m-3 text-justify text-light">
        <span class="d-flex justify-content-end mx-5">N°:
          <?php if ($dados->results[0]->numero_bilhete <= 9) : ?>
            000<?= htmlspecialchars($dados->results[0]->numero_bilhete, ENT_QUOTES, 'UTF-8') ?>
          <?php else : ?>
            00<?= htmlspecialchars($dados->results[0]->numero_bilhete, ENT_QUOTES, 'UTF-8') ?>
          <?php endif; ?><br></span>
        Nome:
        <?= htmlspecialchars($dados->results[0]->nome, ENT_QUOTES, 'UTF-8') ?>
        <hr>
        Contato:
        <?= htmlspecialchars($dados->results[0]->contato, ENT_QUOTES, 'UTF-8') ?>
        <hr>
        Endereço:
        <?= htmlspecialchars($dados->results[0]->endereco, ENT_QUOTES, 'UTF-8') ?>
        <hr>
        Cidade:
        <?= htmlspecialchars($dados->results[0]->cidade, ENT_QUOTES, 'UTF-8') ?>
        <hr>
        Estado:
        <?= htmlspecialchars($dados->results[0]->estado, ENT_QUOTES, 'UTF-8') ?>

      </h6>
    </div>

  </main>

  <?php require_once("footer.php"); ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>