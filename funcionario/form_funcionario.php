<?php 

include_once("../conexao.php");
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<script src="./angular/funcionario.js"></script>

<body ng-app="myApp">

    <div ng-controller="funcionario">
    <body class="bg-light">
    <div class="container">
            <form action="cadastro_funcionario.php" method="POST">
                <div class="form-group">
                    <label>Nome</label>
                    <input type="text" name="nome_funcionario" class="form-control" placeholder="Preencha o Nome">                
                </div>
                    <div class="mb-3">                    
                        <label class="form-label">CPF</label>
                    </div>  
                    <div class="mb-3">    
                        <input type="number" name="cpf" class="form-control" placeholder="Preencha o CPF">                   
                    </div>
                    <div class="mb-3">                    
                        <label class="form-label">funcao</label>
                    </div>  
                    <div class="mb-3">     
                        <input type="text" name="funcao" class="form-control" placeholder="Preencha a função">                    
                    </div>
                    <div class="mb-3">                    
                        <label class="form-label">Telefone</label>
                    </div>  
                    <div class="mb-3">     
                        <input type="number" name="telefone"  class="form-control" >                   
                    </div>
                </div>  
                <button type="submit" name="salvarfuncionario" class="btn btn-primary">Salvar</button>
            </form>
        </div>

    </div>    
</body>
</html>

