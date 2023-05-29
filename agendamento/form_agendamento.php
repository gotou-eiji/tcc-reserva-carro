<?php
    session_start();
?>

<?php 
include_once("../conexao.php");
include_once("../includes.php");

if (!isset($_GET["idcarro"]))
{
    header("Location: listar_carros_disponiveis.php");
}
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <div ng-controller="Agendamento">
    <body class="bg-light">
    <div class="modal-content rounded-4 shadow">
      <div class="modal-header border-bottom-0">
    <div class="container">
            <form action="cadastro_agendamento.php" method="POST">
            
                <input type="hidden" name="idcarro" class="form-control" value="
                <?php
                echo $_GET["idcarro"];
                ?>">

                <div>
                </div>
                <div class="form-group">
                    <label>Cidade destinada</label>
                    <input type="text" name="cidade" class="form-control" placeholder="Preencha o nome da cidade">                
                </div>
                <div class="mb-3">                    
                    <label class="form-label">Bairro</label>
                    <input type="text" name="bairro" class="form-control" placeholder="Preencha o endereço do Bairro">                   
                </div>
                <div class="mb-3">                    
                    <label class="form-label">Data de Entrada</label>
                    <input type="date" name="entrada" class="form-control">                   
                </div>
                <div class="mb-3">                    
                    <label class="form-label">Data de Saída</label>
                    <input type="date" name="saida" class="form-control">                   
                </div>
                <div class="mb-3">                    
                    <label class="form-label">Horário de Entrada</label>
                    <input type="time" name="horarioEntrada" class="form-control">                    
                </div>
                <div class="mb-3">                    
                    <label class="form-label">Horário de Saída</label>
                    <input type="time" name="horarioSaida"  class="form-control">                   
                </div>
                <div class="mb-3">                    
                    <label class="form-label">Motivo da Reserva</label>
                    <input type="textarea" name="motivo"  class="form-control">
                </div>
                <div>
                    <button type="submit" name="salvarAgendamento" class="btn btn-primary">Enviar</button>
                </div>
                
                <?php 
                ?>
            </form>
            
        </div>
    </div>    
</body>
</html>

