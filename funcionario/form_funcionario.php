<?php 
include_once("../conexao.php");
include_once("../includes.php");
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<script src="./angular/funcionario.js"></script>

<body ng-app="myApp">

    <div ng-controller="funcionario">
    <body class="bg-light">
    <div class="modal-content rounded-4 shadow">
      <div class="modal-header border-bottom-0">
    <div class="container">
            <form action="cadastro_funcionario.php" method="POST">
                <div class="form-group">
                    <label>Nome Completo</label>
                    <input type="text" name="nome" class="form-control" placeholder="Preencha o seu Nome Completo">                
                </div>
                    <div class="mb-3">                    
                        <label class="form-label">CPF</label> 
                        <input type="number" name="cpf" class="form-control" placeholder="Preencha o seu CPF">                   
                    </div>
                    <div class="mb-3">                    
                        <label class="form-label">E-mail</label>
                        <input type="email" name="email" class="form-control" placeholder="Preencha o seu e-mail">                    
                    </div>
                    <div class="mb-3">                    
                        <label class="form-label">Telefone</label>
                        <input type="number" name="telefone"  class="form-control" placeholder="Preencha o seu telefone">                   
                    </div>
                    <div class="mb-3">                    
                        <label class="form-label">Função</label>
                        <input type="text" name="funcao"  class="form-control" placeholder="Preencha a sua função">                   
                    </div>
                    <div class="mb-3">                    
                        <label class="form-label">Emprego</label>
                        <input type="text" name="emprego"  class="form-control" placeholder="Preencha o seu emprego">
                    </div>      
                    <button type="submit" name="salvarfuncionario" class="btn btn-primary">Salvar</button>
                
                <?php 
                ?>

         

            </form>
        </div>

    </div>    
</body>

</html>