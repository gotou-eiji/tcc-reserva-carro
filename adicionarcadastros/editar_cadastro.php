<?php 
include_once("../sessao/includes.php");
if (isset($_POST["editarcadastro"]))
{
    $conn = $_SESSION["conexao"];
    $idfuncionario = $_POST["idfuncionario"]; 
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];
    $admin = $_POST["admin"];
    

        if (($usuario == "") || ($senha == ""))
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
            $senha_hash_funcionario = hash("sha256", $senha); // Variavel chama a função "hash" e então codifica em "sha256" o conteudo do que estiver em $senha
            $sql = "UPDATE LOGIN SET usuario = '{$usuario}', senha = '{$senha_hash_funcionario}', admin = '{$admin}' WHERE funcionario_idfuncionario = {$idfuncionario}";

            $result = mysqli_query($conn, $sql);

           if (mysqli_affected_rows($conn) == 1) {
                //$_SESSION["idfuncionario"] = mysqli_insert_id($conn);   
            }
            ?>
            <script>
                window.location.href = "../funcionario/lista_funcionario.php";
                alert("Login editado com sucesso!");
            </script>
            <?php  
}
if (!mysqli_affected_rows($conn) == 1)
{
    ?>
    <script>
        window.location.href = "lista_funcionario.php";
        alert("Erro ao editar o Login!");
    </script>
    <?php  
}
}
?>