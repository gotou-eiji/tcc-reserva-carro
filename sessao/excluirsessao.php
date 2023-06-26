<?php
require_once("conexao.php"); // Inicia a sessão

if (isset($_POST["sair"])) 
    $_SESSION = array(); // Limpa todas as variáveis de sessão

    session_destroy(); // Destrói a sessão

    ?>
    <script>
        window.location.href = "../login/logar_funcionario.php";
        alert("Sessão deletada");
    </script>


