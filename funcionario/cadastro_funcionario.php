<?php
    session_start();
?>

<?php 
include_once("../includes.php");
if (isset($_POST["salvarfuncionario"]))
{
    $conn = $_SESSION["conexao"];

        $nome = $_POST["nome"];
        $cpf = $_POST["cpf"];
        $email = $_POST["email"];
        $telefone = $_POST["telefone"];
        $funcao = $_POST["funcao"];
        $emprego = $_POST["emprego"];
        $sexo = $_POST["sexo"];

        if (($nome == "") || ($cpf == "") || ($email == "")|| ($telefone== "")|| ($funcao== "") || ($emprego==""))
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

            $sql = "INSERT INTO FUNCIONARIO (nome, cpf, email, telefone, funcao, emprego, sexo) VALUES ('{$nome}', '{$cpf}', '{$email}', '{$telefone}', '{$funcao}', '{$emprego}', '{$sexo}')";

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
        alert("Erro ao inserir funcionário!");
    </script>
    <?php  
}
}
?>