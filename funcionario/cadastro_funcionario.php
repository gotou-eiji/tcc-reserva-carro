<?php 
include_once("../includes.php");
if (isset($_POST["salvarfuncionario"]))
{
    $conn = $_SESSION["conexao"];

        $nome = $_POST["nome"];
        $cpf = $_POST["cpf"];
        $funcao = $_POST["funcao"];
        $emprego = $_POST["emprego"];
        $telefone = $_POST["telefone"];
        $email = $_POST["email"];


        if (($nome == "") || ($cpf == "") || ($funcao == "") || ($emprego) || ($telefone== "") || ($email==""))
        {
            ?>
            <script>
                window.location.href = "form_funcionario.php";
                alert("Você precisa preencher os dados!");
    
            </script>
            <?php
        }
        else 
        {

            $sql = "INSERT INTO FUNCIONARIO (nome, cpf, funcao, telefone, email) VALUES ('{$nome}', '{$cpf}', '{$funcao}', '{$emprego}', '{$telefone}', '{$email}')";

            $result = mysqli_query($conn, $sql);

           if (mysqli_affected_rows($conn) == 1) {
                $_SESSION["idfuncionario"] = mysqli_insert_id($conn);   
            }
            ?>
            <script>
                window.location.href = "cadastro_funcionario.php";
                alert("Funcionário cadastrado com sucesso!");
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
