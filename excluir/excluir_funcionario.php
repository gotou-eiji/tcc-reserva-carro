<?php
include_once("../includes.php");

//if (isset($_POST["voltar_pagina"]))?//>
            //<//script>
           // window.location.href = "../funcionario/lista_funcionario.php";//
          //<//script>
            //<//?php 

if (isset($_POST["excluir_funcionario"]))

$idfuncionario = $_POST["idfuncionario"];

// monta a query 
$sql = "DELETE FROM FUNCIONARIO WHERE idfuncionario = '$idfuncionario'";

// executa a query 
$result = mysqli_query($conn, $sql);

if ($result) { 
    echo "Usuario excluído!"; 
} else { 
    echo "Erro: " . $sql . "<br>" . $conn->error;
} 

?>

