<?php 

if (!isset($_SESSION["usuario_logado"]))
{  
    header("http://localhost:8080/reserva_carro/");
    //header("http://localhost/reserva_carro/");
}