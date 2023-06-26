<?php
include_once("../sessao/conexao.php");
include_once("../sessao/includes.php");

// Recupera o valor do pagamento da URL
$pagamento = $_GET["pagamento"];
$quilometragem_inicial = $_GET["quilometragem_inicial"];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Entregar Carro</title>
    <link rel="stylesheet" href="../funcionario/style2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../funcionario/style2.css">
    <style>
        .checkboxes-inline {
            display: flex;
            align-items: center;
        }

        .checkboxes-inline label {
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <section class="her">
            <h2>Entregar Carro</h2>
        </section>

        <form class="form" action="entrega-carro.php" method="POST">
            <div class="form-content">
                <label for="quilometragem_inicial">Quilometragem Inicial</label>
                <input id="quilometragem_inicial" type="number" name="quilometragem_inicial" class="form-control"  value="<?php echo $quilometragem_inicial; ?>">
                <a>Aqui vai a mensagem de erro....</a>
            </div>

            <div class="form-content">
                <label for="quilometragem_saida">Quilometragem de Saída</label>
                <input id="quilometragem_saida" type="number" name="quilometragem_saida" class="form-control" placeholder="Informe a quilometragem de Saída" required>
                <a>Aqui vai a mensagem de erro....</a>
            </div>

            <div class="form-content">
                <label>Preço do Carro: R$<?php echo $pagamento; ?></label>
            </div>

            <div class="form-content checkboxes-inline">
                <label>Itens Verificados:</label>
                <div>
                    <input type="checkbox" id="gasolina" name="gasolina">
                    <label for="gasolina">Gasolina</label>
                </div>
                <div>
                    <input type="checkbox" id="pneu" name="pneu">
                    <label for="pneu">Pneu</label>
                </div>
                <div>
                    <input type="checkbox" id="farol" name="farol">
                    <label for="farol">Farol</label>
                </div>
                <div>
                    <input type="checkbox" id="banco" name="banco">
                    <label for="banco">Banco</label>
                </div>
                <div>
                    <input type="checkbox" id="janela" name="janela">
                    <label for="janela">Janela</label>
                </div>
                <div>
                    <input type="checkbox" id="motor" name="motor">
                    <label for="motor">Motor</label>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Finalizar Entrega</button>
        </form>

        <label id="multaLabel"></label>
        <label id="multaExcessoLabel"></label>
        <label id="pagamentoFinalLabel"></label>

        <script>
            // Aguarda o carregamento completo do documento HTML
            document.addEventListener('DOMContentLoaded', function() {
              // Obtém a referência para a div que contém as checkboxes
              var checkboxes = document.querySelector('.checkboxes-inline');
            
              // Obtém a referência para a label de contabilização da multa
              var multaLabel = document.getElementById('multaLabel');
              // Obtém a referência para a label de contabilização da multa por excesso
              var multaExcessoLabel = document.getElementById('multaExcessoLabel');
              // Obtém a referência para a label do pagamento final
              var pagamentoFinalLabel = document.getElementById('pagamentoFinalLabel');
            
              // Obtém a referência para o campo de quilometragem de saída
              var quilometragemSaidaInput = document.getElementById('quilometragem_saida');
            
              // Obtém a referência para todos os checkboxes
              var checkboxInputs = checkboxes.querySelectorAll('input[type="checkbox"]');
            
              // Função para atualizar a contabilização da multa
              function atualizarMulta() {
                var multa = 0;
            
                for (var i = 0; i < checkboxInputs.length; i++) {
                  if (!checkboxInputs[i].checked) {
                    multa += 150;
                  }
                }
            
                if (multa > 0) {
                  multaLabel.textContent = 'Multa: R$' + multa;
                } else {
                  multaLabel.textContent = 'Sem Multas';
                }
            
                // Chama a função para atualizar o pagamento final
                atualizarPagamentoFinal();
              }
            
              // Função para atualizar a contabilização da multa por excesso
              function atualizarMultaExcesso() {
                var quilometragemInicial = <?php echo $quilometragem_inicial; ?>;
                var quilometragemSaida = quilometragemSaidaInput.value - quilometragemInicial;
            
                // Chama a função para atualizar o pagamento final
                atualizarPagamentoFinal();
              }
            
              // Função para atualizar o valor do pagamento final
              function atualizarPagamentoFinal() {
                var precoCarro = <?php echo $pagamento; ?>;
                var multa = 0;
                var quilometragemInicial = <?php echo $quilometragem_inicial; ?>;
                var quilometragemSaida = quilometragemSaidaInput.value - quilometragemInicial;
                var multaExcesso = Math.floor(quilometragemSaida / 50);
            
                // Calcula a multa
                for (var i = 0; i < checkboxInputs.length; i++) {
                  if (!checkboxInputs[i].checked) {
                    multa += 150;
                  }
                }
            
                // Calcula o valor do pagamento final
                var pagamentoFinal = precoCarro + multa ;
            
                // Atualiza a label do pagamento final com o valor calculado
                pagamentoFinalLabel.textContent = 'Pagamento Final: R$' + pagamentoFinal;
              }
            
              // Adiciona o evento de mudança aos checkboxes
              for (var i = 0; i < checkboxInputs.length; i++) {
                checkboxInputs[i].addEventListener('change', atualizarMulta);
              }
            
              // Adiciona o evento de mudança ao campo de quilometragem de saída
              quilometragemSaidaInput.addEventListener('input', atualizarMultaExcesso);
            
              // Atualiza a contabilização da multa inicialmente
              atualizarMulta();
              // Atualiza a contabilização da multa por excesso inicialmente
              atualizarMultaExcesso();
            });
        </script>
    </div>
</body>
</html>
