<?php 
include_once("../conexao.php");
include_once("../includes.php");
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <body class="bg-light">
    <div class="modal-content rounded-4 shadow">
      <div class="modal-header border-bottom-0">
    <div class="container">
            <form action="cadastro_bairro.php" method="POST">
                <div class="form-group">
                    <label>Bairro</label>
                    <input type="text" name="bairro" class="form-control" placeholder="Preencha o bairro">                
                </div>
                 
                <button type="submit" name="salvarbairro" class="btn btn-primary">Salvar</button>
                
                <?php 
                ?>
            </form>
        </div>
    </div>    
</body>
</html>

