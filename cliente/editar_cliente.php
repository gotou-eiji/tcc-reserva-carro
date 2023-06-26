<?php
include_once("../sessao/includes.php");
if (isset($_POST["editar_cliente"])) {
    $conn = $_SESSION["conexao"];
    $idcliente = $_POST["idcliente"];
    $nome= $_POST["nome"];
    $endereco = $_POST["endereco"];
    $cnh= $_FILES["cnh"];

    if (($nome == "") || ($endereco == "") || ($cnh == "")) {
        ?>
        <script>
            window.location.href = "lista_cliente.php";
            alert("Você precisa preencher os dados!");
        </script>
        <?php
    } else {
        $cnh = $_FILES["cnh"];

        // Verificar se uma cnh foi enviada
        if ($cnh["name"] !== "") {
            $uploadDir = "../imagens_clientes/";
            $uploadFile = $uploadDir . basename($cnh["name"]);

            // Verificar se o upload foi bem-sucedido
            if (move_uploaded_file($cnh["tmp_name"], $uploadFile)) {
                $cnhPath = $uploadFile;
            } else {
                ?>
                <script>
                    window.location.href = "lista_cliente.php";
                    alert("Erro ao fazer upload da cnh!");
                </script>
                <?php
            }
        } else {
            $cnhPath = ""; // Caso nenhum arquivo tenha sido enviado
        }

        $sql = "UPDATE cliente SET nome = '{$nome}', endereco = '{$endereco}', cnh = '{$cnhPath}' WHERE idcliente = '$idcliente'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_affected_rows($conn) == 1) {
            //$_SESSION["idcarro"] = mysqli_insert_id($conn);
            ?>
            <script>
                window.location.href = "lista_cliente.php";
                alert("Client atualizado com sucesso!");
            </script>
            <?php
        } else {
            ?>
            <script>
                window.location.href = "lista_cliente.php";
                alert("Erro ao atualizar cliente!");
            </script>
            <?php
        }
    }
}
?>
