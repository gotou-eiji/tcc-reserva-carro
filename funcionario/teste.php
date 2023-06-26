<?php 
include_once("../sessao/conexao.php");
//include_once("../sessao/includes.php");
?>

<link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../funcionario/style2.css"  />
<!-- <script src="./angular/funcionario.js"></script> -->

<body>
    <header>
    <nav class="nav-bar">
            <div class="logo">
                <h1>Logo</h1>
            </div>
            <div class="nav-list">
                <ul>
                    <li class="nav-item"><a href="index.php" class="nav-link">Início</a></li>
                    <li class="nav-item"><a href="lista_funcionario.php" class="nav-link">Funcionários</a></li>
                    <li class="nav-item"><a href="lista_carro.php" class="nav-link">Carros</a></li>
                    <li class="nav-item"><a href="form_historico.php" class="nav-link">Histórico</a></li>
                    <li class="nav-item"><a href="form_agendamento.php" class="nav-link">Fazer Agendamento</a></li>
                </ul>
            </div>
            <div class="mobile-menu-icon">
                <button onclick="menuShow()"><img class="icon" src="../img/menu_white_36dp.svg" alt=""></button>
            </div>
        </nav>
        <div class="mobile-menu">
            <ul>
            <li class="nav-item"><a href="index.php" class="nav-link">Início</a></li>
                    <li class="nav-item"><a href="lista_funcionario.php" class="nav-link">Funcionários</a></li>
                    <li class="nav-item"><a href="lista_carro.php" class="nav-link">Carros</a></li>
                    <li class="nav-item"><a href="form_historico.php" class="nav-link">Histórico</a></li>
                    <li class="nav-item"><a href="form_agendamento.php" class="nav-link">Fazer Agendamento</a></li>
            </ul>
        </div>
    </header>