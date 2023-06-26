<?php
include_once("../sessao/conexao.php");
include_once("../sessao/includes.php");
?>
<link rel="stylesheet" href="../funcionario/style2.css"  />

<div ng-controller="funcionario">


        
            <div class="modal-header border-bottom-0">
                <div class="container">
                <form action="editar_carro.php" method="POST" enctype="multipart/form-data">
<input type="hidden" name="idcarro" class="form-control" value="<?php echo $_GET["idcarro"]; ?>">
<input type="hidden" name="automatico" class="form-control" value="<?php echo $_GET["automatico"]; ?>">

                        <div class="form-group">
                            <label>Marca</label>
                            <input type="text" name="modelo" class="form-control" value="<?php echo $_GET["marca"]; ?>">
                        </div>
                        <div class="form-group">
                            <label>Modelo</label>
                            <input type="text" name="modelo" class="form-control" value="<?php echo $_GET["modelo"]; ?>">
                        </div>
                        <div class="form-group">
                            <label>Quilometragem Inicial</label>
                            <input type="number" name="quilometragem_inicial" class="form-control" value="<?php echo $_GET["quilometragem_inicial"]; ?>">
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