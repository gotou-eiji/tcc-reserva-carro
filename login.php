<?php 

require_once("conexao.php");

if (isset($_POST["acessar"]))
{
    $login = $_POST["login"];
    $password = $_POST["password"];

    if (($login == "") || ($password == ""))
    {
        ?>
        <script>
            window.location.href = "index.php";
            alert("Você precisa preencher usuário e senha para acessar o sistema!");

        </script>
        <?php
       
    }
    else 
    {
        $response = verifica_login($login, $password);

        if ($response["response"])
        {
            while ($usuario = mysqli_fetch_assoc($response["result"]))
            {
                $_SESSION["usuario_logado"] = $usuario["nome_usuario"];                
            }

            header("Location: dashboard.php");
        }
        else 
        {
            ?>
            <script>
                 window.location.href = "index.php";
                alert("Usuário Não Encontrado!");
            </script>
            <?php
        }
    }
}

function verifica_login($login, $password)
{
    $password = hash("sha256", $password);

    $sql = "SELECT * FROM funcionario WHERE cpf = '{$login}' AND senha = '{$password}'";
    
    $result = mysqli_query($_SESSION["conexao"], $sql);
   
    $response["result"] = $result;

    $response["response"] = mysqli_num_rows($result) > 0 ? true : false;

    return $response;

}