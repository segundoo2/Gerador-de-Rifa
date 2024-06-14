<?php require_once("header.php")?>

<body>
    <div class="container">
        <form action="cadastro.php" method="post">
            <div class="row mt-3">
                <div class="col">
                    <label for="nome">Nome completo</label>
                    <input type="text" class="form-control" name="nome" maxlength="1000">
                </div>
            </div>

            <div class="row">
                <div class="col w-25">
                    <label for="contato">Contato</label>
                    <input type="text" class="form-control" id="contato" name="contato" oninput="formatarNumero(this)" maxlength="17">
                </div>
                <div class="col w-50">
                    <label for="endereco">Endereço</label>
                    <input type="text" class="form-control" name="endereco" maxlength="1000">
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="cidade">Cidade</label>
                    <input type="text" class="form-control" name="cidade" value="Natal" maxlength="100">
                </div>

                <div class="col">
                    <label for="estado">Estado</label>
                    <input type="text" class="form-control" id="estado" name="estado" value="RN" maxlength="2">
                </div>
            </div>

            <div class="row mt-3">
                <div class="col d-flex justify-content-center mt-3">
                    <button type="submit" class="btn btn-lg btn-success w-25">Cadastrar comprador</button>
                </div>
            </div>
        </form>
    </div>

    <?php require_once("footer.php")?>

    <script src="assets/js/formatarNumero.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
