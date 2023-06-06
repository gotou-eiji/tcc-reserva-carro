<?php
include_once("../sessao/includes.php");
if (isset($_POST["excluir_carro"])){

    $conn = $_SESSION["conexao"];
    $idcarro = $_POST["idcarro"]; 

$sql = "DELETE FROM carro WHERE idcarro = $idcarro";

if (mysqli_query($conn, $sql)) {
    ?>
    <script>
        window.location.href = "lista_carro.php";
        alert("Carro excluido com sucesso!");
    </script>
    <?php  

} else {
    ?>
    <script>
        window.location.href = "lista_carro.php";
        alert("Erro ao deletar o carro");
    </script>
    <?php  
}
}