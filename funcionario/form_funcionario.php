<?php 
include_once("../sessao/conexao.php");
include_once("../sessao/includes.php");
?>

<link rel="stylesheet" href="../funcionario/style2.css"  />
<link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../funcionario/style2.css"  />
<!-- <script src="./angular/funcionario.js"></script> -->

<body>

  <div class="container">
    <section class="her">
      <h2>Cadastro</h2>
    </section>
    
    <form class="form" action="cadastro_funcionario.php" method="POST">
      <div class="form-content">
        <label for="Nome">Nome Completo</label>
        <input  id="Nome" type="text" name="nome" class="form-control" placeholder="Preencha o seu Nome Completo"/>
        <a>Aqui vai a mensagem de erro....</a>
      </div>

      <div class="form-content">
        <label for="email">Email</label>
        <input  id="email" type="email" name="email" class="form-control" placeholder="Preencha o seu e-mail"/>
        <a>Aqui vai a mensagem de erro....</a>
      </div>

      <div class="form-content">                   
        <label  for="telefone" class="form-label">Telefone</label>
        <input  id="telefone" type="number" name="telefone"  class="form-control" placeholder="Preencha o seu telefone">  
        <a>Aqui vai a mensagem de erro....</a>                 
    </div>
    <div class="form-content">                   
        <label for="funcao" class="form-label">Função</label>
        <input id="funcao" type="text" name="funcao"  class="form-control" placeholder="Preencha a sua função">  
        <a>Aqui vai a mensagem de erro....</a>                   
    </div>
    <div class="form-content">                  
        <label for="emprego" class="form-label">Emprego</label>
        <input id="emprego" type="text" name="emprego"  class="form-control" placeholder="Preencha o seu emprego">
        <a>Aqui vai a mensagem de erro....</a>
    </div>
    <div class="form-content">                  
        <label for="data" class="form-label">Data de Nascimento</label>
        <input id="data" type="date" name="data_nascimento"  class="form-control" placeholder="Preencha a sua data de nascimento">
        <a>Aqui vai a mensagem de erro....</a>
    </div>
    <div class="form-content">                  
        <label for="cep" class="form-label">CEP</label>
        <input id="cep" type="number" name="cep"  class="form-control" placeholder="Preencha o seu CEP">
        <a>Aqui vai a mensagem de erro....</a>
    </div>

    <div class="form-content">                  
        <label for="cpf" class="form-label">CPF</label>
        <input id="cpf" type="number" name="cpf"  class="form-control" placeholder="Preencha o seu CPF">
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
    
    <button type="submit" name="salvarfuncionario" class="btn btn-primary">Salvar</button>

    </form>

  </div>
  

  <!-- <script src="../funcionario/script.js"></script> -->
</body>
</html>