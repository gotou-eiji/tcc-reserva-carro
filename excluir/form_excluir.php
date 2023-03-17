
<?php 
include_once("../conexao.php");

include_once("../includes.php");
if (!isset($_GET["idfuncionario"]))
{
   header("Location: ../funcionario/lista_funcionario.php");
}
?>
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<div class="modal modal-alert position-static d-block bg-secondary py-5" tabindex="-1" role="dialog" id="modalChoice">
  <div class="modal-dialog" role="document">
    <div class="modal-content rounded-3 shadow">
      <div class="modal-body p-4 text-center">
        <h5 class="mb-0">Você quer excluir esse funcionário?</h5>
      </div>
      <form action="excluir_funcionario.php" method="POST">
         <input type="hidden" name="idfuncionario" value="<?php 
            if (isset($_GET["idfuncionario"]))
            {
                echo $_GET["idfuncionario"];
            }
        ?>">
      <div class="modal-footer flex-nowrap p-0">
      <button type="submit" name="excluir_funcionario" class="btn btn-lg btn-danger mt-5 w-100" data-bs-dismiss="modal">Excluir</button>
      <button type="submit" name="voltar_pagina" class="btn btn-lg btn-secondary mt-5 w-100" data-bs-dismiss="modal">Não, voltar</button>
      
      </div>
    </div>
  </div>
</div>
                </div>