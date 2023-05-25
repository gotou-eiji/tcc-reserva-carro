<?php
    session_start();
?>

<?php
include_once("../includes.php");
if (isset($_POST["salvarcadastro"]))
{
    $conn = $_SESSION["conexao"];

        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];
        $tipo = $_POST["tipo"];
        $funcionario_idfuncionario = $_POST["idfuncionario"];

        
        if (!isset($_POST["idfuncionario"])) // Verifica se pegou idfuncionario, se não ele volta ao header.
        {
            header("Location:lista_funcionario.php");
        }
    

        if (($usuario == "") || ($senha == ""))
        {
            ?>
            <script>
                window.location.href = "form_cadastros.php";
                alert("Você precisa preencher os dados!");
    
            </script>
            <?php
        }
        else 
        {
            $senha_hash_funcionario = hash("sha256", $senha); // Variavel chama a função "hash" e então codifica em "sha256" o conteudo do que estiver em $senha_funcionario
            $sql = "INSERT INTO login_funcionario (usuario, senha, tipo, funcionario_idfuncionario) VALUES ('{$usuario}', '{$senha_hash_funcionario}', '{$tipo}', '{$funcionario_idfuncionario}')";
            
            $result = mysqli_query($conn, $sql);
           
      
           if (mysqli_affected_rows($conn) == 1) {
                $_SESSION["idfuncionario"] = mysqli_insert_id($conn);   
            }
            ?>
            <script>
                window.location.href = "form_cadastros.php";
                
                alert("Cadastro efetuado com sucesso!");
            </script>
            <?php  
}
    if (!mysqli_affected_rows($conn) == 1)
    {
        ?>
        <script>
            window.location.href = "form_cadastros.php";
            alert("Erro ao inserir cadastro!");
        </script>
        <?php
    }
}
?>