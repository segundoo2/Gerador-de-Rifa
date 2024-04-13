<?php
require_once ('index.php');

$dados_comprador = [
    'nome' => $_POST['nome'],
    'contato' => $_POST['contato'],
    'endereco' => $_POST['endereco'],
    'cidade' => $_POST['cidade'],
    'estado' => $_POST['estado']
];


?>

<?php if($_SERVER['REQUEST_METHOD'] == 'POST'): ?>
    <div class="alert alert-success mt-4 text-center" role="alert">
        Cadastro realizado com sucesso
    </div>
<?php else: ?>
    <div class="alert alert-danger d-flex justify-content-center align-items-center" role="alert">
        <p>[Erro] não foi possível realizar a requisição. Volte para a página de cadastro clicando <a href="index.php">aqui</a>.</p>
    </div>
<?php endif; ?>