<?php 
include_once("../sessao/conexao.php");
include_once("../sessao/includes.php");
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <body class="bg-light">
    <div class="modal-content rounded-4 shadow">
      <div class="modal-header border-bottom-0">
    <div class="container">
            <form action="excluir_carro.php" method="POST">
            <input type="hidden" name="idcarro" class="form-control" value="
                <?php
                echo $_GET["idcarro"];
                ?>">
                <div class="form-group">
                    <label>Deseja realmente excluir?</label>
                </div>
                <button type="submit" name="excluir_carro" class="btn btn-primary">Sim</button>
                </form>
                <form action="lista_carro.php" method="POST">
                <button type="submit" class="btn btn-second">Não</button>
</form>
</body>
