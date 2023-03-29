<?php 
include_once("../includes.php");
if (isset($_POST["salvarcidade"]))
{
    $conn = $_SESSION["conexao"];

        $cidade = $_POST["cidade"];
        $bairro = $_POST["bairro"];

        if (($cidade == ""))
        {
            ?>
            <script>
                window.location.href = "form_cidade.php";
                alert("Voce precisa preencher os dados!");    
            </script>
            <?php
        }
        else
        {
            $sql = "INSERT INTO cidade (cidade) VALUES ('{$cidade}')";

            $result = mysqli_query($conn, $sql);

           if (mysqli_affected_rows($conn) == 1) {
                $_SESSION["idcidade"] = mysqli_insert_id($conn);   
            }
            ?>
            <script>
                window.location.href = "form_cidade.php";
                alert("Cidade cadastrado com sucesso!");
            </script>
            <?php  
}
if (!mysqli_affected_rows($conn) == 1)
{
    ?>
    <script>
        window.location.href = "form_cidade.php";
        alert("Erro ao inserir carro!");
    </script>
    <?php  
}
}
?>
