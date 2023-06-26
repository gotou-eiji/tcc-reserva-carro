<?php 
include_once("../sessao/conexao.php");
include_once("../sessao/includes.php");
?>
<link rel="stylesheet" href="../funcionario/style2.css"  />
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATUALIZAR</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../funcionario/style2.css"  />
<script src="./angular/funcionario.js"></script>
</head>

    <div class="container">

<form id="form" class="form" action="editar_funcionario.php" method="POST">

<input type="hidden" name="idfuncionario" class="form-control" value="<?php echo $_GET["idfuncionario"]; ?>">
        <input type="hidden" name="nome" class="form-control" value="<?php echo $_GET["nome"]; ?>">
        <input type="hidden" name="cpf" class="form-control" value="<?php echo $_GET["cpf"]; ?>">
        <input type="hidden" name="email" class="form-control" value="<?php echo $_GET["email"]; ?>">
        <input type="hidden" name="telefone" class="form-control" value="<?php echo $_GET["telefone"]; ?>">
        <input type="hidden" name="emprego" class="form-control" value="<?php echo $_GET["emprego"]; ?>">
        <input type="hidden" name="funcao" class="form-control" value="<?php echo $_GET["funcao"]; ?>">
        <input type="hidden" name="data_nascimento" class="form-control" value="<?php echo $_GET["data_nascimento"]; ?>">
        <input type="hidden" name="cep" class="form-control" value="<?php echo $_GET["cep"]; ?>">


    <center>
    <section class="header">
      <h2>Editar dados </h2>
    </section>
</center>
      <div class="form-content">
        <label for="Nome">Nome Completo</label>
        <input  id="Nome" type="text" name="nome" class="form-control" value="<?php echo $_GET["nome"]; ?>">
        <a>Aqui vai a mensagem de erro....</a>
      </div>

      <div class="form-content">
        <label for="email">Email</label>
        <input  id="email" type="email" name="email" class="form-control" value="<?php echo $_GET["email"]; ?>">
        <a>Aqui vai a mensagem de erro....</a>
      </div>

      <div class="form-content">                   
        <label  for="telefone" class="form-label">Telefone</label>
        <input  id="telefone" type="number" name="telefone"  class="form-control" value="<?php echo $_GET["telefone"]; ?>">
        <a>Aqui vai a mensagem de erro....</a>                 
    </div>
    <div class="form-content">                   
        <label for="funcao" class="form-label">Função</label>
        <input id="funcao" type="text" name="funcao"  class="form-control" value="<?php echo $_GET["funcao"]; ?>">  
        <a>Aqui vai a mensagem de erro....</a>                   
    </div>
    <div class="form-content">                  
        <label for="emprego" class="form-label">Emprego</label>
        <input id="emprego" type="text" name="emprego"  class="form-control" value="<?php echo $_GET["emprego"]; ?>">
        <a>Aqui vai a mensagem de erro....</a>
    </div>
    <div class="form-content">                  
        <label for="data" class="form-label">Data de Nascimento</label>
        <input id="data" type="date" name="data_nascimento"  class="form-control" value="<?php echo $_GET["data_nascimento"]; ?>">
        <a>Aqui vai a mensagem de erro....</a>
    </div>
    <div class="form-content">                  
        <label for="cep" class="form-label">CEP</label>
        <input id="cep" type="number" name="cep"  class="form-control" value="<?php echo $_GET["cep"]; ?>">
        <a>Aqui vai a mensagem de erro....</a>
    </div>

    <div class="form-content">                  
        <label for="cpf" class="form-label">CPF</label>
        <input id="cpf" type="number" name="cpf"  class="form-control" value="<?php echo $_GET["cpf"]; ?>">
        <a>Aqui vai a mensagem de erro....</a>
    </div>
    <div>
        <label class="form-label">Sexo</label>
    </div>
    <div class="d-grid gap-4 col-100 d-md-flex  justify-content-md ">
        <div>
            <input type="radio" id="masculino" name="sexo" value="masculino" />
            <label for="masculino">Masculino</label>
        </div>
        <div>
            <input type="radio" id="feminino" name="sexo" value="feminino" />
            <label for="feminino">Feminino</label>
        </div>
        <div>
            <input type="radio" id="outros" name="sexo" value="outros" />
            <label for="outros">Outros</label>
        </div>
    </div>
 
                    <button type="submit" name="editar_funcionario" class="btn btn-primary">Atualizar</button>

</form>  
</body>

</html>