<?php 
include_once("../sessao/includes.php");
include_once("../sessao/conexao.php");

?>

    <body class="bg-light">
    <div class="modal-content rounded-4 shadow">
      <div class="modal-header border-bottom-0">
    <div class="container">
            <form action="excluir_funcionario.php" method="POST">
                <input type="hidden" name="idfuncionario" class="form-control" value="<?php echo $_GET["idfuncionario"]; ?>">
                

                <div class="form-group">
                  <center>
                    <label>Deseja realmente excluir este funcionário?</label>

</center>
                   <input type="label" name="idlogin" disabled class="form-control" value="Id Login: <?php echo $_GET["idlogin"]; ?>">
                    <input type="label" name="idfuncionario" disabled class="form-control" value="Id Funcionário: <?php echo $_GET["idfuncionario"]; ?>">
                    <input type="label" name="nome" disabled class="form-control" value="Nome: <?php echo $_GET["nome"]; ?>">
                    <input type="label" name="cpf" disabled class="form-control" value="CPF: <?php echo $_GET["cpf"]; ?>">
                    <input type="label" name="email" disabled class="form-control" value="E-mail: <?php echo $_GET["email"]; ?>">
                    <input type="label" name="telefone" disabled class="form-control" value="Telefone: <?php echo $_GET["telefone"]; ?>">
                    <input type="label" name="funcao" disabled class="form-control" value="Função: <?php echo $_GET["funcao"]; ?>">
                    <input type="label" name="emprego" disabled class="form-control" value="Emprego: <?php echo $_GET["emprego"]; ?>">
                    <input type="label" name="data_nascimento" disabled class="form-control" value="Data De Nascimento: <?php echo $_GET["data_nascimento"]; ?>">
                    <input type="label" name="cep" disabled class="form-control" value="CEP: <?php echo $_GET["cep"]; ?>">
                    <input type="label" name="sexo" disabled class="form-control" value="Sexo: <?php echo $_GET["sexo"]; ?>">
                </div>
                <button type="submit" name="excluir_funcionario" class="btn btn-primary">Sim</button>
                </form>
                <form action="lista_funcionario.php" method="POST">
                <button type="submit" class="btn btn-second">Não</button>
</form>
</body>
