<?php 
include_once("../sessao/conexao.php");
include_once("../sessao/includes.php");
?>
<link rel="stylesheet" href="../funcionario/style2.css"  />


    <div class="container">
            <form action="excluir_carro.php" method="POST">


                <div class="form-group">
                <center>
                    <label>Deseja realmente excluir este carro?</label>
</center>
                    <input type="label" name="modelo" disabled class="form-control" value="Modelo: <?php echo $_GET["modelo"]; ?>">
                    <input type="label" name="quilometragem_inicial" disabled class="form-control" value="Quilometragem: <?php echo $_GET["quilometragem_inicial"]; ?>">
                    <input type="label" name="placa" disabled class="form-control" value="Placa: <?php echo $_GET["placa"]; ?>">
                    <input type="label" name="preco" disabled class="form-control" value="Preço: <?php echo $_GET["preco"]; ?>">
                    <input type="label" name="motorizacao" disabled class="form-control" value="Motorização: <?php echo $_GET["motorizacao"]; ?>">
                    <input type="label" name="ano" disabled class="form-control" value="Ano: <?php echo $_GET["ano"]; ?>">
                    <input type="label" name="cor" disabled class="form-control" value="Cor: <?php echo $_GET["cor"]; ?>">
                    <input type="label" name="automatico" disabled class="form-control" value="Automático: <?php echo $_GET["automatico"]; ?>">
                    <img src="<?php echo $_GET["imagem"]; ?>" alt="Imagem do Carro" style="max-width: 665px; max-height: 665px;">
                    <input type="hidden" name="idcarro" class="form-control" value="<?php echo $_GET["idcarro"]; ?>">
                </div>
                <button type="submit" name="excluir_carro" class="btn btn-primary">Sim</button> 
                </form>
                <form action="lista_carro.php" method="POST">
                <button type="submit" class="btn btn-second">Não</button> 
</form>
</body>
