<?php
include_once("../includes.php");
if (isset($_POST["salvarAgendamento"])) {
    $conn = $_SESSION["conexao"];

    $cidade = $_POST["cidade"];
    $bairro = $_POST["bairro"];
    $data_entrada = $_POST["entrada"];
    $data_saida = $_POST["saida"];
    $horario_entrada = $_POST["horarioEntrada"];
    $horario_saida = $_POST["horarioSaida"];
    $motivo = $_POST["motivo"];



    if (($cidade == "") || ($bairro == "") || ($data_entrada == "") || ($data_saida == "") || ($horario_entrada == "") || ($horario_saida == "") || ($motivo == "")) {
?>
        <script>
            window.location.href = "form_agendamento.php";
            alert("Você precisa preencher os dados!");
        </script>
    <?php
    } else {

        $sql = "INSERT INTO agendamento (cidade, bairro, entrada, saida, horario_entrada, horario_saida, motivo) VALUES ('{$cidade}', '{$bairro}', '{$data_entrada}', '{$data_entrada}', '{$horario_entrada}', '{$horario_saida}', '{$motivo}')";

        $result = mysqli_query($conn, $sql);

        if (mysqli_affected_rows($conn) == 1) {
            $_SESSION["idfuncionario"] = mysqli_insert_id($conn);
        }
    ?>
        <script>
            window.location.href = "cadastro_agendamento.php";
            alert("Funcionario cadastrado com sucesso!");
        </script>
    <?php
    }
    if (!mysqli_affected_rows($conn) == 1) {
    ?>
        <script>
            window.location.href = "cadastro_funcionario.php";
            alert("Erro ao inserir funcionario");
        </script>
<?php
    }
}
?>