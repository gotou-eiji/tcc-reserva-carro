<?php 
include_once("../includes.php");


if (isset($_POST["salvar_agendamento"]))
{
    $sql = "SELECT idcarro FROM carro WHERE idcarro = carro_idcarro;";
    $sql = "SELECT idfuncionario FROM funcionario WHERE idfuncionario = funcionario_idfuncionario;";
    $sql = "SELECT idcidade FROM cidade WHERE idcidade = cidade_idcidade;";
   
    $conn = $_SESSION["conexao"];
    $carro_idcarro = $_POST["carro_idcarro"];
    $funcionario_idfuncionario = $_POST["funcionario_idfuncionario"];
    $cidade_idcidade = $_POST["cidade_idcidade"];
        $entrada =  $_POST["entrada"];
        $saida =  $_POST["saida"];
        $horario_entrada =  $_POST["horario_entrada"];
        $horario_saida =  $_POST["horario_saida"];
        $data =  $_POST["data"];
        $motivo =  $_POST["motivo"];

            $sql = "INSERT INTO AGENDAMENTO (carro_idcarro,funcionario_idfuncionario,cidade_idcidade,entrada, saida, horario_entrada, horario_saida,data,motivo) VALUES ('{$carro_idcarro}','{$funcionario_idfuncionario}','{$cidade_idcidade}','{$entrada}','{$saida}', '{$horario_entrada}', '{$horario_saida}', '{$data}', '{$motivo}')";

            $result = mysqli_query($conn, $sql);
}

           if (mysqli_affected_rows($conn) == 1) {
                $_SESSION["idfuncionario"] = mysqli_insert_id($conn);   
            }
            ?>
            <script>
                window.location.href = "form_agendamento.php";
                alert("Agendamento cadastrado com sucesso!");
            </script>
            <?php  

if (!mysqli_affected_rows($conn) == 1)
{
    ?>
    <script>
        window.location.href = "cadastro_agendamento.php";
        alert("Erro ao inserir agendamento");
    </script>
    <?php  
}

?>
