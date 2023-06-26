<?php
include_once("../sessao/conexao.php");
include_once("../sessao/includes.php");
?>

        
            <div class="modal-header border-bottom-0">
                <div class="container">
                <form action="cadastro_carro.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                            <label>Marca</label>
                            <input type="text" name="marca" class="form-control" placeholder="Preencha a Marca">
                        </div>
                        <div class="form-group">
                            <label>Modelo</label>
                            <input type="text" name="modelo" class="form-control" placeholder="Preencha o Modelo">
                        </div>
                        <div class="form-group">
                            <label>Quilometragem Inicial</label>
                            <input type="decimal" name="quilometragem_inicial" class="form-control" placeholder="Preencha a Quilometragem">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Placa</label>
                            <input type="text" size = "7" maxlength = "7" name="placa" class="form-control" placeholder="Preencha a Placa">
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
                        <div class="mb-3">
                         <label>Imagem</label>
                         <input type="file" name="imagem" class="form-control-file">
                        </div>

                
                <button type="submit" name="salvarcarro" class="btn btn-primary">Salvar</button>
                <?php
                ?>
                </form>
            </div>
        </div>
    </body>

    </html>