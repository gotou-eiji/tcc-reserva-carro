<?php 

if (!isset($_SESSION["usuario_logado"]))
{  
    header("http://localhost/tcc-reserva-carro/");
    //header("http://localhost/reserva_carro/");
}