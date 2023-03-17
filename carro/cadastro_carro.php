<?php 
include_once("../includes.php");
if (isset($_POST["salvarcarro"]))
{
    $conn = $_SESSION["conexao"];

        $modelo = $_POST["modelo"];
        $placa = $_POST["placa"];

        if (($modelo == "") || ($placa == ""))
        {
            ?>
            <script>
                window.location.href = "form_carro.php";
                alert("Voce precisa preencher os dados!");    
            </script>
            <?php
        }
        else
        {
            $sql = "INSERT INTO carro (modelo, placa) VALUES ('{$modelo}', '{$placa}')";

            $result = mysqli_query($conn, $sql);

           if (mysqli_affected_rows($conn) == 1) {
                $_SESSION["idcarro"] = mysqli_insert_id($conn);   
            }
            ?>
            <script>
                window.location.href = "cadastro_carro.php";
                alert("Carro cadastrado com sucesso!");
            </script>
            <?php  
}
if (!mysqli_affected_rows($conn) == 1)
{
    ?>
    <script>
        window.location.href = "cadastro_carro.php";
        alert("Erro ao inserir carro!");
    </script>
    <?php  
}
}
?>
