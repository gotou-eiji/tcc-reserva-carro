<?php
    session_start();
?>

<?php

require_once("../conexao.php");

if (isset($_POST["acessar"])) {
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    if (($usuario == "") || ($senha == "")) {
?>
        <script>
            window.location.href = "../index.php";
            alert("Você precisa preencher usuário e senha para acessar o sistema!");
        </script>
        <?php

    } else {
        $response = verifica_usuario($usuario, $senha);

        if ($response["response"]) {
            $usuario_funcionario = mysqli_fetch_assoc($response["result"]);
            $_SESSION["usuario_funcionario_logado"] = $usuario_funcionario["login_idlogin"];

            unset($_SESSION["usuario_Funcionario_logado"]);
            header("Location: ../home/home.php");
        } else {
        ?>
            <script>
                window.location.href = "../index.php";
                alert("Usuário não encontrado!");
            </script>
<?php
        }
    }
}

function verifica_usuario($usuario, $senha)
{
    $senha = hash("sha256", $senha);

    $sql = "SELECT * FROM login WHERE usuario = '{$usuario}' AND senha = '{$senha}'";

    $result = mysqli_query($_SESSION["conexao"], $sql);

    $response["result"] = $result;

    $response["response"] = mysqli_num_rows($result) > 0 ? true : false;

    return $response;
}
