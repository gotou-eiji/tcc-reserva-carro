<?php

if (!isset($_SESSION["usuario_logado"])) {
    header("http://localhost/reserva_carro/");
    //header("http://localhost/reserva_carro/");
}
