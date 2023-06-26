
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
      <h2>Editar o Login</h2>
    </section>
    <form action="editar_cadastro.php" method="POST">
            <input type="hidden" name="idlogin" class="form-control" value="
                <?php
                echo $_GET["idlogin"];
                ?>">
                            <input type="hidden" name="idfuncionario" class="form-control" value="
                <?php
                echo $_GET["idfuncionario"];
                ?>">
                                            <input type="hidden" name="usuario" class="form-control" value="
                <?php
                echo $_GET["usuario"];
                ?>">
    <form class="form" action="cadastro_funcionario.php" method="POST">
      <div class="form-content">
        <label for="Nome">Usuario</label>
        <input  id="Nome" type="text" name="usuario" class="form-control" value="<?php echo $_GET["usuario"]; ?>">

        <a>Aqui vai a mensagem de erro....</a>
      </div>

      <div class="form-content">
        <label for="senha">Senha</label>
        <input  id="senha" type="password" name="senha" class="form-control" placeholder="Preencha a nova senha"/>
        <a>Aqui vai a mensagem de erro....</a>
      </div>            
        
      <fieldset>
                        <div>
                            <input type="checkbox" id="admin" name="admin" value="1">
                            <label for="admin">Admin</label>
                        </div>
                </fieldset>
                    <button type="submit" name="editarcadastro" class="btn btn-primary">Atualizar</button>

        </form>
</body>
</html>

