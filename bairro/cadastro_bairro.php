<?php 
include_once("../includes.php");
if (isset($_POST["salvarcarro"]))
{
    $conn = $_SESSION["conexao"];

        $bairro = $_POST["bairro"];
       

        if (($modelo == "") )
        {
            ?>
            <script>
                window.location.href = "form_bairro.php";
                alert("Voce precisa preencher os dados!");    
            </script>
            <?php
        }
        else
        {
            $sql = "INSERT INTO bairro (modelo, placa) VALUES ('{$modelo}', '{$placa}')";

            $result = mysqli_query($conn, $sql);

           if (mysqli_affected_rows($conn) == 1) {
                $_SESSION["idbairro"] = mysqli_insert_id($conn);   
            }
            ?>
            <script>
                window.location.href = "cadastro_bairro.php";
                alert("Bairro cadastrado com sucesso!");
            </script>
            <?php  
}
if (!mysqli_affected_rows($conn) == 1)
{
    ?>
    <script>
        window.location.href = "cadastro_barro.php";
        alert("Erro ao inserir carro!");
    </script>
    <?php  
}
}
?>
