<?php

require_once("../sessao/conexao.php");



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
        $response = verifica_usuario($usuario, $senha); // realiza a consulta SQL para buscar o usuário e a senha no banco de dados.

        if ($response["response"]) {
            while ($usuario= mysqli_fetch_assoc($response["result"])) {
                $_SESSION["usuario"] = $usuario["usuario"]; // Armazena o nome do login na sessão
                $_SESSION["funcionario_idfuncionario"] = $usuario["funcionario_idfuncionario"]; // Armazena o funcionario_idfuncionario na sessão
                $_SESSION["idlogin"] = $usuario["idlogin"]; // Armazena o idlogin na sessão
                $_SESSION["admin"] = $usuario["admin"]; // Armazena o tipo na sessão
            }

            header("Location: ../home/home.php");
            exit; // Encerra a execução após redirecionar
        } else {
            ?>
            <script>
                window.location.href = "../index.php";
                alert("Usuário Não Encontrado!");
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
