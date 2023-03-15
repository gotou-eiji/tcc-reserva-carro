<?php 

$url_absoluta = "http://localhost:8080/tcc-reserva-carros/";

$url = $_SERVER['REQUEST_URI'];

$explode_url = explode("/", $url);

$segmento = 2;

if ($explode_url[$segmento] != "funcionario")
{    
    $url_funcionario = $url_absoluta."funcionario/";
}
else 
{   
    $url_funcionario = "";    
}

if ($explode_url[$segmento] != "carro")
{    
    $url_carro = $url_absoluta."carro/";
}
else 
{   
    $url_carro = "";    
}

if ($explode_url[$segmento] != "agendamento")
{    
    $url_agendamento = $url_absoluta."agendamento/";
}
else 
{   
    $url_agendamento = "";    
}


if ($explode_url[$segmento] != "pedido")
{    
    $url_pedido = $url_absoluta."pedido/";
}
else 
{   
    $url_pedido = "";    
}
    
?>

<ul>
    <li><a href="<?php echo $url_absoluta."home/home.php"; ?>">Inicio</a></li>
    <li>
        <a href="<?php  
            echo $url_funcionario."form_funcionario.php"; ?>">
            Cadastrar funcionario
        </a>
    </li>
    <li>
        <a href="<?php  
            echo $url_funcionario."lista_funcionario.php"; ?>">
            Listar funcionario
        </a>
    </li>
    <li>
        <a href="<?php  
            echo $url_carro."form_carro.php"; ?>">
            Cadastrar carro
        </a>
    </li>
    <li>
        <a href="<?php  
            echo $url_carro."lista_carro.php"; ?>">
            Listar carro
        </a>
    </li>
  
    <li>
        <a href="<?php  
            echo $url_agendamento."form_agendamento.php"; ?>">
            Histórico
        </a>
    </li>
    <li>
        <a href="<?php  
            echo $url_agendamento."lista_agendamento.php"; ?>">
            Fazer agendamento
        </a>
    </li>
    <li><a href="logout.php">Sair</a></li>
</ul>