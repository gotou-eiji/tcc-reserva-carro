<?php

include_once("../sessao/conexao.php");

// Verificar se a sessão do administrador existe e tem valor 1
$permissaoAdmin = false;
if (isset($_SESSION["admin"]) && $_SESSION["admin"] == 1) {
    $permissaoAdmin = true;
}

// Verificar se a sessão do administrador não existe
if (!isset($_SESSION["admin"]) && basename($_SERVER["PHP_SELF"]) !== "logar_funcionario.php" && basename($_SERVER["PHP_SELF"]) !== "login_funcionario.php") {
    // Redirecionar para a página de login
    header("Location: ../login/logar_funcionario.php");
    exit();
} else if ($_SESSION["admin"] != 1 && !in_array(basename($_SERVER["PHP_SELF"]), array(
    "cadastro_agendamento.php",
    "form_agendamento.php",
    "listar_carros_disponiveis.php",
    "form_historico.php",
    "historico.php",
    "cadastro_cliente.php",
    "editar_cliente.php",
    "excluir_cliente.php",
    "form_cliente.php",
    "form_editar.php",
    "form_excluir.php",
    "lista_cliente.php",
    "home.php"
))) {
    // Exibir um alerta informando que a permissão é necessária
    echo '<script>alert("Permissão necessária para acessar esta página!");</script>';
    echo '<script>window.location.href = "../login/logar_funcionario.php";</script>';
    exit();
}
?>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../funcionario/style2.css"  />

<body>
    <header>
        <nav class="nav-bar">
            <div class="logo">
                <h1>Logo</h1>
            </div>
            <div class="nav-list">
                <ul>
                    <li class="nav-item"><a href="../home/home.php" class="nav-link">Início</a></li>
                    <?php if ($permissaoAdmin): ?>
                        <li class="nav-item"><a href="../funcionario/lista_funcionario.php" class="nav-link">Funcionários</a></li>
                        <li class="nav-item"><a href="../carro/lista_carro.php" class="nav-link">Carros</a></li>
                    <?php endif; ?>
                    <li class="nav-item"><a href="../agendamento/form_agendamento.php" class="nav-link">Fazer Agendamento</a></li>
                    <li class="nav-item"><a href="../cliente/lista_cliente.php" class="nav-link">Clientes</a></li>
                    <li class="nav-item"><a href="../historico/form_historico.php" class="nav-link">Histórico</a></li>
                    <li class="nav-item"><a href="../sessao/excluirsessao.php" class="nav-link">Logout</a></li>
                </ul>
            </div>
            <div class="mobile-menu-icon">
                <button onclick="menuShow()"><img class="icon" src="../img/menu_white_36dp.svg" alt=""></button>
            </div>
        </nav>
        <div class="mobile-menu">
            <ul>
                <li class="nav-item"><a href="index.php" class="nav-link">Início</a></li>
                <?php if ($permissaoAdmin): ?>
                    <li class="nav-item"><a href="lista_funcionario.php" class="nav-link">Funcionários</a></li>
                    <li class="nav-item"><a href="lista_carro.php" class="nav-link">Carros</a></li>
                    <li class="nav-item"><a href="form_historico.php" class="nav-link">Histórico</a></li>
                <?php endif; ?>
                <li class="nav-item"><a href="form_agendamento.php" class="nav-link">Fazer Agendamento</a></li>
                <li class="nav-item"><a href="../sessao/excluirsessao.php" class="nav-link">Logout</a></li>
            </ul>
        </div>
    </header>
</body>
