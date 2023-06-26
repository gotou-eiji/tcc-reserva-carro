
<?php 
include_once("../sessao/includes.php");
if (!isset($_GET["idfuncionario"]))
{
    header("Location:../funcionario/lista_funcionario.php");
}
?>

<link rel="stylesheet" href="../funcionario/style2.css"  />


<div class="container">
    <section class="her">
      <h2>Cadastro de Login</h2>
    </section>
    <form action="adicionar_cadastro.php" method="POST">
            <input type="hidden" name="idfuncionario" class="form-control" value="
                <?php
                echo $_GET["idfuncionario"];
                ?>">
    <form class="form" action="cadastro_funcionario.php" method="POST">
      <div class="form-content">
        <label for="Nome">Usuario</label>
        <input  id="Nome" type="text" name="usuario" class="form-control" placeholder="Preencha o usuário"/>
        <a>Aqui vai a mensagem de erro....</a>
      </div>

      <div class="form-content">
        <label for="email">Senha</label>
        <input  id="email" type="password" name="senha" class="form-control" placeholder="Preencha o seu senha"/>
        <a>Aqui vai a mensagem de erro....</a>
      </div>              
      <fieldset>
                        <div>
                            <input type="checkbox" id="admin" name="admin" value="1">
                            <label for="admin">Admin</label>
                        </div>
                </fieldset>
                    <button type="submit" name="salvarcadastro" class="btn btn-primary">Registrar</button>

        </form>
</body>
</html>

