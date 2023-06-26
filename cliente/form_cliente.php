<?php
include_once("../sessao/conexao.php");
include_once("../sessao/includes.php");
?>

        
            <div class="modal-header border-bottom-0">
                <div class="container">
                <form action="cadastro_cliente.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                            <label>Nome</label>
                            <input type="text" name="nome" class="form-control" placeholder="Preencha o nome">
                        </div>
                        <div class="form-group">
                            <label>Telefone</label>
                            <input type="number" name="telefone" class="form-control" placeholder="Preencha o telefone">
                        </div>
                        <div class="form-group">
                            <label>Endereço</label>
                            <input type="text" name="endereco" class="form-control" placeholder="Preencha o endereço">
                        </div>
                        <div class="mb-3">
                         <label>Imagem</label>
                         <input type="file" name="cnh" class="form-control-file">
                        </div>

                
                <button type="submit" name="salvarcliente" class="btn btn-primary">Salvar</button>
                <?php
                ?>
                </form>
            </div>
        </div>
    </body>

    </html>