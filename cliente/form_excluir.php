<?php 
include_once("../sessao/conexao.php");
include_once("../sessao/includes.php");
?>
<link rel="stylesheet" href="../funcionario/style2.css"  />


    <div class="container">
            <form action="excluir_cliente.php" method="POST">
            <input type="hidden" name="idcliente" class="form-control" value="<?php echo $_GET["idcliente"]; ?>">

                <div class="form-group">
                <center>
                    <label>Deseja realmente excluir este cliente?</label>
</center>
                    <input type="label" name="nome" disabled class="form-control" value="Nome: <?php echo $_GET["nome"]; ?>">
                    <input type="label" name="telefone" disabled class="form-control" value="Telefone: <?php echo $_GET["telefone"]; ?>">
                    <input type="label" name="endereco" disabled class="form-control" value="Endereço: <?php echo $_GET["endereco"]; ?>">
                    <img src="<?php echo $_GET["cnh"]; ?>" alt="Imagem do CNH" style="max-width: 665px; max-height: 665px;">
                </div>
                <button type="submit" name="excluir_cliente" class="btn btn-primary">Sim</button> 
                </form>
                <form action="lista_cliente.php" method="POST">
                <button type="submit" class="btn btn-second">Não</button> 
</form>
</body>
