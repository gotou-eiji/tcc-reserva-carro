<?php 
include_once("includes.php");
if (isset($_POST["salvarAgendamento"]))
{
    $conn = $_SESSION["conexao"];

        $cidade = $_POST["cidade"];
        $bairro = $_POST["bairro"];
        $data_entrada = $_POST["dataEntrada"];
        $data_saida = $_POST["dataSaida"];
        $horario_entrada = $_POST["horarioEntrada"];
        $horario_saida = $_POST["horarioSaida"];
        $motivo = $_POST["motivo"];
        $intervalo = $_POST["intervalo"];
 


        if if (($cidade == "") || ($bairro == "") || ($data_entrada == "")|| ($data_saida== "") || ($horario_entrada == "") || ($horario_saida== "") || ($motivo == "") || ($intervalo== ""))
        {
            ?>
            <script>
                window.location.href = "form_agendamento.php";
                alert("Você precisa preencher os dados!");
    
            </script>
            <?php
        }
        else 
        {

            $sql = "INSERT INTO FUNCIONARIO (nome, cpf, funcao, telefone) VALUES ('{$nome}', '{$cpf}', '{$funcao}', '{$telefone}')";

            $result = mysqli_query($conn, $sql);

           if (mysqli_affected_rows($conn) == 1) {
                $_SESSION["idfuncionario"] = mysqli_insert_id($conn);   
            }
            ?>
            <script>
                window.location.href = "cadastro_funcionario.php";
                alert("Funcionario cadastrado com sucesso!");
            </script>
            <?php  
}
if (!mysqli_affected_rows($conn) == 1)
{
    ?>
    <script>
        window.location.href = "cadastro_funcionario.php";
        alert("Erro ao inserir funcionario");
    </script>
    <?php  
}
}
?>
