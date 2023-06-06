<?php
    session_start();
?>

<?php
include_once("../sessao/includes.php");

if (isset($_POST["salvarAgendamento"])) {
    $conn = $_SESSION["conexao"];
    $login_idlogin = $_SESSION["usuario_funcionario_logado"];
    $carro_idcarro = $_POST["idcarro"]; // pega id estrageira via $_GET pelo botão do reservar do "listar_carros_disponiveis.php"
    $cidade = $_POST["cidade"];
    $bairro = $_POST["bairro"];
    $data_entrada = $_POST["entrada"];
    $data_saida = $_POST["saida"];
    $horario_entrada = $_POST["horarioEntrada"];
    $horario_saida = $_POST["horarioSaida"];
    $motivo = $_POST["motivo"];


    if (!isset($_POST["idcarro"])) // Verifica se pegou idcarro, se não ele volta ao header.
    {
        header("Location:listar_carros_disponiveis.php");
    }



    if (($cidade == "") || ($bairro == "") || ($data_entrada == "") || ($data_saida == "") || ($horario_entrada == "") || ($horario_saida == "") || ($motivo == "")) {
?>
        <script>
            window.location.href = "form_agendamento.php";
            alert("Você precisa preencher os dados!");
        </script>
    <?php
    } else {

        $sql = "INSERT INTO agendamento (login_idlogin, carro_idcarro, cidade, bairro, entrada, saida, horario_entrada, horario_saida, motivo) VALUES ('{$login_idlogin}','{$carro_idcarro}','{$cidade}', '{$bairro}', '{$data_entrada}', '{$data_saida}', '{$horario_entrada}', '{$horario_saida}', '{$motivo}')";
      
        $result = mysqli_query($conn, $sql);

        if (mysqli_affected_rows($conn) == 1) {
            // $_SESSION["idfuncionario"] = mysqli_insert_id($conn);
        }
    ?>
        <script>
            window.location.href = "cadastro_agendamento.php";
            alert("Agendamento realizado com sucesso!");
        </script>
    <?php
    }
    if (!mysqli_affected_rows($conn) == 1) {
    ?>
        <script>
            window.location.href = "listar_carros_disponiveis.php";
            alert("Erro ao realizar o agendamento!");
        </script>
<?php
    }
}
?>