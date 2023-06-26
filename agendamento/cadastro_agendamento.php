<?php
include_once("../sessao/includes.php");

if (isset($_POST["salvarAgendamento"])) {
    $conn = $_SESSION["conexao"];
    $carro_idcarro = $_POST["idcarro"];
    $funcionario_idfuncionario = $_SESSION["funcionario_idfuncionario"];
    $idlogin = $_SESSION["idlogin"];
    $cidade = $_POST["cidade"];
    $bairro = $_POST["bairro"];
    $data_entrada = $_POST["entrada"];
    $data_saida = $_POST["saida"];
    $horario_entrada = $_POST["horarioEntrada"];
    $horario_saida = $_POST["horarioSaida"];
    $motivo = $_POST["motivo"];
    $idcliente = $_POST["idcliente"];
    $carro_disponivel = 1;

    $data_inicial = strtotime($data_entrada);
    $data_final = strtotime($data_saida);

    if (!isset($_POST["idcarro"])) {
        header("Location:listar_carros_disponiveis.php");
        exit; // É importante adicionar o exit aqui para garantir que o script seja interrompido após o redirecionamento.
    }

    if ($data_final < $data_inicial) {
        ?>
        <script>
            window.location.href = "listar_carros_disponiveis.php";
            alert("Data incorreta!");
        </script>
        <?php
    }

    if (($cidade == "") || ($bairro == "") || ($data_entrada == "") || ($data_saida == "") || ($horario_entrada == "") || ($horario_saida == "") || ($motivo == "") || ($idcliente == "") || ($data_final < $data_inicial) ) {
        ?>
        <script>
            window.location.href = "form_agendamento.php";
            alert("Você precisa preencher todos os dados!");
        </script>
        <?php
    } else {
        $sql_cliente = "SELECT nome FROM cliente WHERE idcliente = $idcliente";
        $result_cliente = mysqli_query($conn, $sql_cliente);
        $row_cliente = mysqli_fetch_assoc($result_cliente);
        $nome_cliente = $row_cliente["nome"];

        $sql_usuario = "SELECT usuario FROM login WHERE idlogin = $idlogin";
        $result_usuario = mysqli_query($conn, $sql_usuario);
        $row_usuario = mysqli_fetch_assoc($result_usuario);
        $nome_funcionario = $row_usuario["usuario"];

        // Obter o preço do carro
        $sql_preco_carro = "SELECT preco FROM carro WHERE idcarro = $carro_idcarro";
        $result_preco_carro = mysqli_query($conn, $sql_preco_carro);
        $row_preco_carro = mysqli_fetch_assoc($result_preco_carro);
        $preco_carro = $row_preco_carro["preco"];

        // Calcular a diferença de dias entre a data de entrada e a data de saída
        $diferenca_dias = (strtotime($data_saida) - strtotime($data_entrada)) / (60 * 60 * 24);

        // Calcular o valor do pagamento
        $valor_pagamento = $preco_carro * $diferenca_dias;

        $sql = "INSERT INTO agendamento (carro_idcarro,funcionario_idfuncionario, login_idlogin, cidade, bairro, entrada, saida, horario_entrada, horario_saida, motivo, cliente_idcliente, nome_cliente, nome_funcionario, pagamento, carro_disponivel) 
                VALUES ('$carro_idcarro', '$funcionario_idfuncionario', '$idlogin', '$cidade', '$bairro', '$data_entrada', '$data_saida', '$horario_entrada', '$horario_saida', '$motivo', '$idcliente', '$nome_cliente', '$nome_funcionario', '$valor_pagamento', '$carro_disponivel')";
      
        $result = mysqli_query($conn, $sql);

        if (mysqli_affected_rows($conn) == 1) {
            ?>
            <script>
                window.location.href = "listar_carros_disponiveis.php";
                alert("Agendamento realizado com sucesso!");
            </script>
            <?php
        } else {
            ?>
            <script>
                window.location.href = "listar_carros_disponiveis.php";
                alert("Erro ao realizar agendamento");
            </script>
            <?php
        }
    }
}
?>
