<?php 

require_once("conexao.php");

if (isset($_POST["acessar"]))
{
    $login = $_POST["login"];
    $senha = $_POST["senha"];

    if (($login == "") || ($senha == ""))
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
        $response = verifica_login($login, $senha);

        if ($response["response"])
        {
            while ($usuario = mysqli_fetch_assoc($response["result"]))
            {
                $_SESSION["usuario_logado"] = $usuario["nome_usuario"];                
            }

            header("Location: ./home/home.php");
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

function verifica_login($login, $senha)
{
    $senha = hash("sha256", $senha);

    $sql = "SELECT * FROM login WHERE login = '{$login}' AND senha = '{$senha}'";
    
    $result = mysqli_query($_SESSION["conexao"], $sql);
   
    $response["result"] = $result;

    $response["response"] = mysqli_num_rows($result) > 0 ? true : false;

    return $response;

}