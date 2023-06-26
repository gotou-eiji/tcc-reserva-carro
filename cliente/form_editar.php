<?php
include_once("../sessao/conexao.php");
include_once("../sessao/includes.php");
?>
<link rel="stylesheet" href="../funcionario/style2.css"  />



        
            <div class="modal-header border-bottom-0">
                <div class="container">
                <form action="editar_cliente.php" method="POST" enctype="multipart/form-data">
<input type="hidden" name="idcliente" class="form-control" value="<?php echo $_GET["idcliente"]; ?>">


                        <div class="form-group">
                            <label>Nome</label>
                            <input type="text" name="nome" class="form-control" value="<?php echo $_GET["nome"]; ?>">
                        </div>
                        <div class="form-group">
                            <label>Telefone</label>
                            <input type="text" name="telefone" class="form-control" value="<?php echo $_GET["telefone"]; ?>">
                        </div>
                        <div class="form-group">
                            <label>Endereço</label>
                            <input type="text" name="endereco" class="form-control" value="<?php echo $_GET["endereco"]; ?>">
                        </div>
                            <div class="mb-3">
                         <label>CNH</label>
                         <input type="file" name="cnh" class="form-control-file" value="<?php echo $_GET["cnh"]; ?>">
                        </div>
                
                <button type="submit" name="editar_cliente" class="btn btn-primary">Atualizar</button>
                <?php
                ?>
                </form>
            </div>
        </div>
    </body>

    </html>