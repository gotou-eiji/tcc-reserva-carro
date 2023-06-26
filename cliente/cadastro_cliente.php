<link rel="stylesheet" href="../funcionario/style2.css"  />

<?php
include_once("../sessao/includes.php");
if (isset($_POST["salvarcliente"])) {
    $conn = $_SESSION["conexao"];
    $nome = $_POST["nome"];
    $telefone = $_POST["telefone"];
    $endereco = $_POST["endereco"];
    $imagem = $_FILES["cnh"];
    if (($nome == "") || ($telefone == "") || ($endereco == "") || ($imagem == "")) {
        ?>
        <script>
            window.location.href = "form_cliente.php";
            alert("Você precisa preencher os dados!");
        </script>
        <?php
    } else {

        $imagem = $_FILES["cnh"];

        // Verificar se uma imagem foi enviada
        if ($imagem["name"] !== "") {
            $uploadDir = "../imagens_clientes/";
            $uploadFile = $uploadDir . basename($imagem["name"]);

            // Verificar se o upload foi bem-sucedido
            if (move_uploaded_file($imagem["tmp_name"], $uploadFile)) {
                $imagemPath = $uploadFile;
            } else {
                ?>
                <script>
                    window.location.href = "lista_cliente.php";
                    alert("Erro ao fazer upload da imagem!");
                </script>
                <?php
            }
        } else {
            $imagemPath = ""; // Caso nenhum arquivo tenha sido enviado
        }

        $sql = "INSERT INTO cliente (nome, telefone, endereco, cnh) VALUES ('{$nome}','{$telefone}', '{$endereco}','{$imagemPath}')";

        $result = mysqli_query($conn, $sql);

        if (mysqli_affected_rows($conn) == 1) {
            //$_SESSION["idcarro"] = mysqli_insert_id($conn);
            ?>
            <script>
                window.location.href = "lista_cliente.php";
                alert("Clieente cadastrado com sucesso!");
            </script>
            <?php
        } else {
            ?>
            <script>
                window.location.href = "lista_cliente.php";
                alert("Erro ao inserir cliente!");
            </script>
            <?php
        }
    }
}
?>
