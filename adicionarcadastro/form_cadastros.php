<?php
    session_start();
?>

<?php 
include_once("../sessao/includes.php");
if (!isset($_GET["idfuncionario"]))
{
    header("Location:../funcionario/lista_funcionario.php");
}
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<body div class="p-3 mb-2 bg-dark-subtle text-center">



    <div class="modal-header border-bottom-0">
    <div class="container">
        <form action="adicionar_cadastro.php" method="POST">
            <input type="hidden" name="idfuncionario" class="form-control" value="
                <?php
                echo $_GET["idfuncionario"];
                ?>">
                <div class="form-group">
                    <label>Usuário</label>
                    <input type="text" name="usuario" class="form-control" placeholder="Preencha o usuário">                
                </div>
                <div class="mb-3">                    
                    <label class="form-label">Senha</label> 
                    <input type="password" name="senha" class="form-control" placeholder="Preencha o seu senha">
                </div>
                <fieldset>
                        <div>
                            <input type="checkbox" id="admin" name="admin" value="1">
                            <label for="admin">Admin</label>
                        </div>
                </fieldset>
                <div>
                    <button type="submit" name="salvarcadastro" class="btn btn-primary">Registrar</button>
                </div>
        </form>
</body>
</html>

