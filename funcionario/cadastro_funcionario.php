<?php 

include_once("../includes.php");

if (isset($_POST["salvarfuncionario"]))
{
    $conn = $_SESSION["conexao"];
    {
        $nome_funcionario = $_POST["nome_funcionario"];

        $sql = "INSERT INTO funcionario (nome) VALUES ('{$nome_funcionario}')";

        $result = mysqli_query($conn, $sql);

        if (!mysqli_affected_rows($conn) == 1)
        {
            ?>
            <script>
                window.location.href = "form_funcionario.php";
                alert("Erro ao inserir funcionario");
            </script>
            <?php  
        }
        else 
        {
            $idfuncionario = mysqli_insert_id($conn);
            ?>
            <script>
                window.location.href = "form_funcionario.php";
                alert("Funcionario cadastrado com sucesso!");
            </script>
            <?php  
}
}
}