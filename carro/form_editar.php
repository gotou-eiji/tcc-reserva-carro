<?php
include_once("../sessao/conexao.php");
include_once("../sessao/includes.php");
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<div ng-controller="funcionario">

    <body class="bg-light">
        
        <div class="modal-content rounded-4 shadow">
            <div class="modal-header border-bottom-0">
                <div class="container">
                <form action="editar_carro.php" method="POST" enctype="multipart/form-data">
<input type="hidden" name="idcarro" class="form-control" value="<?php echo $_GET["idcarro"]; ?>">
<input type="hidden" name="marca" class="form-control" value="<?php echo $_GET["marca"]; ?>">
<input type="hidden" name="modelo" class="form-control" value="<?php echo $_GET["modelo"]; ?>">
<input type="hidden" name="placa" class="form-control" value="<?php echo $_GET["placa"]; ?>">
<input type="hidden" name="preco" class="form-control" value="<?php echo $_GET["preco"]; ?>">
<input type="hidden" name="motorizacao" class="form-control" value="<?php echo $_GET["motorizacao"]; ?>">
<input type="hidden" name="ano" class="form-control" value="<?php echo $_GET["ano"]; ?>">
<input type="hidden" name="cor" class="form-control" value="<?php echo $_GET["cor"]; ?>">
<input type="hidden" name="automatico" class="form-control" value="<?php echo $_GET["automatico"]; ?>">


                        <div class="form-group">
                            <label>Marca</label>
                            <input type="text" name="modelo" class="form-control" value="<?php echo $_GET["marca"]; ?>">
                        </div>
                        <div class="form-group">
                            <label>Modelo</label>
                            <input type="text" name="modelo" class="form-control" value="<?php echo $_GET["modelo"]; ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Placa</label>
                            <input type="text" size = "7" maxlength = "7" name="placa" class="form-control" value="<?php echo $_GET["placa"]; ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Preço</label>
                            <input type="text" name="preco" class="form-control" value="<?php echo $_GET["preco"]; ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Motorização</label>
                            <input type="text" name="motorizacao" class="form-control" value="<?php echo $_GET["motorizacao"]; ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Ano</label>
                            <input type="text"  name="ano" class="form-control" value="<?php echo $_GET["ano"]; ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Cor</label>
                            <input type="text" name="cor" class="form-control" value="<?php echo $_GET["cor"]; ?>">
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
                            <div class="mb-3">
                         <label>Imagem</label>
                         <input type="file" name="imagem" class="form-control-file">
                        </div>
                
                <button type="submit" name="editar_carro" class="btn btn-primary">Atualizar</button>
                <?php
                ?>
                </form>
            </div>
        </div>
    </body>

    </html>