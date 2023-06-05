<?php 
include_once("includes.php");
if (isset($_POST["editar_funcionario"]))
{
    $conn = $_SESSION["conexao"];
    $idfuncionario = $_POST["idfuncionario"]; 
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $funcao = $_POST["funcao"];
    $emprego = $_POST["emprego"];
    $sexo = $_POST["sexo"];
    $data_nascimento = $_POST["data_nascimento"];
    $cep = $_POST["cep"];


        if (($nome == "") || ($cpf == "") || ($email == "")|| ($telefone== "")|| ($funcao== "") || ($emprego=="") || ($sexo=="") || ($data_nascimento=="") || ($cep==""))
        {
            ?>
            <script>
                window.location.href = "lista_funcionario.php";
                alert("Você precisa preencher os dados!");
    
            </script>
            <?php
        }
        else 
        {

            $sql = "UPDATE FUNCIONARIO SET nome = '{$nome}', cpf = '{$cpf}', email = '{$email}', telefone = '{$telefone}', funcao = '{$funcao}', emprego = '{$emprego}' , sexo = '{$sexo}', data_nascimento = '{$data_nascimento}', cep = '{$cep}'WHERE idfuncionario = '$idfuncionario'";

            $result = mysqli_query($conn, $sql);

           if (mysqli_affected_rows($conn) == 1) {
                //$_SESSION["idfuncionario"] = mysqli_insert_id($conn);   
            }
            ?>
            <script>
                window.location.href = "lista_funcionario.php";
                alert("Funcionario editado com sucesso!");
            </script>
            <?php  
}
if (!mysqli_affected_rows($conn) == 1)
{
    ?>
    <script>
        window.location.href = "lista_funcionario.php";
        alert("Erro ao editar funcionário!");
    </script>
    <?php  
}
}
?>