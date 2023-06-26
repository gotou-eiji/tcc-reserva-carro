<?php
include_once("../sessao/includes.php");

if (isset($_POST["excluir_cliente"])) {
    $conn = $_SESSION["conexao"];
    $idcliente = $_POST["idcliente"];

    // Verificar se existem registros na tabela agendamento associados a esse cliente
    $sqlVerificarAgendamento = "SELECT COUNT(*) AS total FROM agendamento WHERE cliente_idcliente = $idcliente";
    $resultVerificarAgendamento = mysqli_query($conn, $sqlVerificarAgendamento);
    $rowVerificarAgendamento = mysqli_fetch_assoc($resultVerificarAgendamento);
    $totalAgendamento = $rowVerificarAgendamento["total"];

    if ($totalAgendamento > 0) {
        // Caso existam registros na tabela agendamento associados a esse cliente, atualize o campo cliente_idcliente para NULL
        $sqlAtualizarAgendamento = "UPDATE agendamento SET cliente_idcliente = NULL WHERE cliente_idcliente = $idcliente";
        mysqli_query($conn, $sqlAtualizarAgendamento);
    }

    // Excluir registro do cliente
    $sqlCliente = "DELETE FROM cliente WHERE idcliente = $idcliente";

    if (mysqli_query($conn, $sqlCliente)) {
        ?>
        <script>
            window.location.href = "lista_cliente.php";
            alert("Cliente excluído com sucesso!");
        </script>
        <?php
    } else {
        ?>
        <script>
            window.location.href = "lista_cliente.php";
            alert("Erro ao excluir o cliente.");
        </script>
        <?php
    }
}
?>
