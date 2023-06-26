<?php
include_once("../sessao/includes.php");

if (isset($_POST["excluir_carro"])) {
    $conn = $_SESSION["conexao"];
    $idcarro = $_POST["idcarro"];

    // Verificar se existem registros na tabela agendamento associados a esse carro
    $sqlVerificarAgendamento = "SELECT COUNT(*) AS total FROM agendamento WHERE carro_idcarro = $idcarro";
    $resultVerificarAgendamento = mysqli_query($conn, $sqlVerificarAgendamento);
    $rowVerificarAgendamento = mysqli_fetch_assoc($resultVerificarAgendamento);
    $totalAgendamento = $rowVerificarAgendamento["total"];

    if ($totalAgendamento > 0) {
        // Obter a quilometragem_inicial do carro
        $sqlCarro = "SELECT quilometragem_inicial FROM carro WHERE idcarro = $idcarro";
        $resultCarro = mysqli_query($conn, $sqlCarro);
        $rowCarro = mysqli_fetch_assoc($resultCarro);
        $quilometragemInicial = $rowCarro["quilometragem_inicial"];

        // Atualizar a coluna quilometragem_inicial na tabela agendamento com o valor da quilometragem_inicial do carro
        $sqlAtualizarAgendamento = "UPDATE agendamento SET quilometragem_inicial = $quilometragemInicial WHERE carro_idcarro = $idcarro";
        mysqli_query($conn, $sqlAtualizarAgendamento);

        // Atualizar o campo carro_idcarro para NULL na tabela agendamento
        $sqlAtualizarAgendamento = "UPDATE agendamento SET carro_idcarro = NULL WHERE carro_idcarro = $idcarro";
        mysqli_query($conn, $sqlAtualizarAgendamento);
    }

    // Excluir registro do carro
    $sqlCarro = "DELETE FROM carro WHERE idcarro = $idcarro";

    if (mysqli_query($conn, $sqlCarro)) {
        ?>
        <script>
            window.location.href = "lista_carro.php";
            alert("Carro excluído com sucesso!");
        </script>
        <?php
    } else {
        ?>
        <script>
            window.location.href = "lista_carro.php";
            alert("Erro ao excluir o carro. <?php echo mysqli_error($conn); ?>");
        </script>
        <?php
    }
}
?>
