<?php
include_once("../includes.php");
if (isset($_POST["excluir_funcionario"])){

    $conn = $_SESSION["conexao"];
    $idfuncionario = $_POST["idfuncionario"]; 

$sql = "DELETE FROM funcionario WHERE idfuncionario = $idfuncionario";

if (mysqli_query($conn, $sql)) {
    ?>
    <script>
        window.location.href = "lista_funcionario.php";
        alert("Funcionario excluido com sucesso!");
    </script>
    <?php  

} else {
    ?>
    <script>
        window.location.href = "lista_funcionario.php";
        alert("Erro ao deletar o funcionario");
    </script>
    <?php  
}
}