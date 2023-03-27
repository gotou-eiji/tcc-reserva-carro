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
                                <label>Nome</label>
                                <input type="text" name="nome" class="form-control" placeholder="Preencha o Nome">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">CPF</label>
                            </div>
                            <div class="mb-3">
                                <input type="number" name="cpf" class="form-control" placeholder="Preencha o CPF">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Função</label>
                            </div>
                            <div class="mb-3">
                                <input type="text" name="funcao" class="form-control" placeholder="Preencha a função">
                            </div>
                            <label class="form-label">Emprego</label>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="emprego" class="form-control" placeholder="Preencha o emprego">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Telefone</label>
                    </div>
                    <div class="mb-3">
                        <input type="number" name="telefone" class="form-control" placeholder="Preencha o telefone">
                    </div>
                    <label class="form-label">Email</label>
                </div>
                <div class="mb-3">
                    <input type="text" name="email" class="form-control" placeholder="Preencha o email">
                </div>
            </div>
            <button type="submit" name="salvarfuncionario" class="btn btn-primary">Salvar</button>

            <?php
            ?>






            </form>
    </div>

    </div>
</body>

</html>