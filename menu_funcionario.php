<?php

$url_absoluta = "http://localhost/tcc-reserva-carro/";
$url = $_SERVER['REQUEST_URI'];

$explode_url = explode("/", $url);

$segmento = 2;

if ($explode_url[$segmento] != "funcionario") {
    $url_funcionario = $url_absoluta . "funcionario/";
} else {
    $url_funcionario = "";
}

if ($explode_url[$segmento] != "carro") {
    $url_carro = $url_absoluta . "carro/";
} else {
    $url_carro = "";
}

if ($explode_url[$segmento] != "agendamento") {
    $url_agendamento = $url_absoluta . "agendamento/";
} else {
    $url_agendamento = "";
}


// if ($explode_url[$segmento] != "adicionarcadastros") {
//     $url_adicionarcadastros = $url_absoluta . "adicionarcadastros/";
// } else {
//     $url_adicionarcadastros = "";
// }


?>

<ul>

    <body div class="p-3 mb-2 bg-dark-subtle ">
        </div>

    </body>
    <div class="d-grid gap-4 col-100 d-md-flex  justify-content-md ">
        <li><a href="<?php echo $url_absoluta . "home/home.php"; ?>" class="btn btn-primary text-center">Inicio Do Site</a>

        <li><a href="<?php echo $url_absoluta . "home/home.php"; ?>" class="btn btn-primary">Inicio Do Painel</a>

        <li>
            <a href="<?php
                        echo $url_carro . "lista_carro.php"; ?>" class="btn btn-primary"> Listar carro
            </a>
        </li>

        <li>
            <a href="<?php
                        echo $url_agendamento . "form_historico.php"; ?>" class="btn btn-primary"> Histórico
            </a>
        </li>
        <li>
            <a href="<?php
                        echo $url_agendamento . "form_agendamento.php"; ?>" class="btn btn-primary"> Fazer agendamento
            </a>
        </li>

        <a href="../excluirsessao.php" name="sair" class="btn btn-danger">Sair</a>

        <svg class="bi" width="1em" height="1em">
            <use xlink:href="#toggles2"></use>
        </svg>
    </div>
</ul>