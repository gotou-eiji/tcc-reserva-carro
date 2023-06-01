<?php
    session_start();
?>

<?php
include_once("../conexao.php");
include_once("../includes.php");
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<div ng-controller="funcionario">

    <body class="bg-light">
        <div class="modal-content rounded-4 shadow">
            <div class="modal-header border-bottom-0">
                <div class="container">
                    <form action="cadastro_carro.php" method="POST">
                        <div class="form-group">
                            <label>Marca</label>
                            <input type="text" name="marca" class="form-control" placeholder="Preencha a Marca">
                        </div>
                        <div class="mb-3">
                            <label>Modelo</label>
                            <input type="text" name="modelo" class="form-control" placeholder="Preencha o Modelo">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Placa</label>
                            <input type="text" size = "7" maxlength = "7" name="placa" class="form-control" placeholder="Preencha a Placa" style='text-transform:uppercase'>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Preço</label>
                            <input type="text" name="preco" class="form-control" placeholder="Preencha o Preço">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Motorização</label>
                            <input type="text" name="motorizacao" class="form-control" placeholder="Preencha a Motorização">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Ano</label>
                            <input type="text"  name="ano" class="form-control" placeholder="Preencha o Ano">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Cor</label>
                            <input type="text" name="cor" class="form-control" placeholder="Preencha a Cor">
                        </div>
                        <div>
                            <label class="form-label">Automático</label>
                        </div>
                            <div class="d-grid gap-4 col-100 d-md-flex  justify-content-md ">
                            <div>
                                <input type="radio" id="sim" name="automatico" value="sim" />
                                <label for="sim">Sim</label>
                            </div>
                            <div>
                                <input type="radio" id="nao" name="automatico" value="nao" />
                                <label for="nao">Não</label>
                            </div>
                    </div>
                        <div>
                            <button type="submit" name="salvarcarro" class="btn btn-primary">Salvar</button>
                        </div>

                <?php
                ?>
                </form>
            </div>
        </div>
    </body>

    </html>