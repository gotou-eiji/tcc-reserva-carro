<?php
include_once("../sessao/includes.php");

if (isset($_POST["excluir_funcionario"])) {
    $conn = $_SESSION["conexao"];
    $idfuncionario = $_POST["idfuncionario"];
    // Desativar a restrição de chave estrangeira temporariamente
    mysqli_query($conn, "SET FOREIGN_KEY_CHECKS = 0");
    // Obter o nome do funcionário antes de excluir
    $sql_funcionario = "SELECT nome FROM funcionario WHERE idfuncionario = $idfuncionario";
    $result_funcionario = mysqli_query($conn, $sql_funcionario);
    $row_funcionario = mysqli_fetch_assoc($result_funcionario);
    $nome_funcionario = $row_funcionario["nome"];

    // Registrar a exclusão do funcionário no histórico (tabela "agendamento")
    // $sqlHistorico = "INSERT INTO agendamento (nome_funcionario) VALUES ('$nome_funcionario')";
    // mysqli_query($conn, $sqlHistorico);



    // Excluir registro da tabela de login
    $sqlLogin = "DELETE FROM login WHERE funcionario_idfuncionario = $idfuncionario";
    $resultLogin = mysqli_query($conn, $sqlLogin);

    // Excluir registro da tabela de funcionário
    $sqlFuncionario = "DELETE FROM funcionario WHERE idfuncionario = $idfuncionario";
    $resultFuncionario = mysqli_query($conn, $sqlFuncionario);

    // Reativar a restrição de chave estrangeira
    mysqli_query($conn, "SET FOREIGN_KEY_CHECKS = 1");

    // Verificar se ocorreram erros durante as exclusões
    if ($resultLogin && $resultFuncionario) {
        ?>
        <script>
            window.location.href = "lista_funcionario.php";
            alert("Funcionário excluído com sucesso!");
        </script>
        <?php
    } else {
        ?>
        <script>
            window.location.href = "lista_funcionario.php";
            alert("Erro ao excluir o funcionário.");
        </script>
        <?php
    }
}
