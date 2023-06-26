<?php
include_once("../sessao/includes.php");

if (isset($_POST["salvarAgendamento"])) {
    $conn = $_SESSION["conexao"];
    $carro_idcarro = $_POST["idcarro"];
    $funcionario_idfuncionario = $_POST["funcionario"]; // Obtém o valor selecionado no ComboBox "funcionario"
    
    // Consulta SQL para obter os dados do funcionário selecionado
    $sql = "SELECT idlogin FROM login WHERE funcionario_idfuncionario = '{$funcionario_idfuncionario}'";
    $result = mysqli_query($conn, $sql);
    
    if ($row = mysqli_fetch_assoc($result)) {
        $idlogin = $row["idlogin"];
        
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

        $sql = "INSERT INTO agendamento (carro_idcarro,funcionario_idfuncionario, login_idlogin, cidade, bairro, entrada, saida, horario_entrada, horario_saida, motivo) VALUES ('{$carro_idcarro}','{$funcionario_idfuncionario}','{$idlogin}','{$cidade}', '{$bairro}', '{$data_entrada}', '{$data_saida}', '{$horario_entrada}', '{$horario_saida}', '{$motivo}')";
      
        $result = mysqli_query($conn, $sql);

        if (mysqli_affected_rows($conn) == 1) {
            //$_SESSION["idfuncionario"] = mysqli_insert_id($conn);
        }
    ?>
        <script>
            window.location.href = "listar_carros_disponiveis.php";
            alert("Agendamento realizado com sucesso!");
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
}?>