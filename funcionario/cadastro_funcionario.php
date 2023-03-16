<?php 
include_once("../includes.php");
if (isset($_POST["salvarfuncionario"]))
{
    $conn = $_SESSION["conexao"];

        $nome = $_POST["nome"];
        $cpf = $_POST["cpf"];
        $funcao = $_POST["funcao"];
        $telefone = $_POST["telefone"];
 


        if (($nome == "") || ($cpf == "") || ($funcao == "")|| ($telefone== ""))
        {
            ?>
            <script>
                window.location.href = "form_funcionario.php";
                alert("Voce precisa preencher os dados!");
    
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
