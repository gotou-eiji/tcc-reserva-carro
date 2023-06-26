<?php
include_once("../sessao/includes.php");
if (isset($_POST["editar_carro"])) {
    $conn = $_SESSION["conexao"];
    $idcarro = $_POST["idcarro"];
    $modelo = $_POST["modelo"];
    $quilometragem_inicial = $_POST["quilometragem_inicial"];
    $placa = $_POST["placa"];
    $preco = $_POST["preco"];
    $motorizacao = $_POST["motorizacao"];
    $ano = $_POST["ano"];
    $cor = $_POST["cor"];
    $automatico = $_POST["automatico"];
    $marca = $_POST["marca"];
    $imagem = $_FILES["imagem"];

    if (($modelo == "") || ($placa == "") || ($preco == "")) {
        ?>
        <script>
            window.location.href = "lista_carro.php";
            alert("Você precisa preencher os dados!");
        </script>
        <?php
    } else {
        $imagem = $_FILES["imagem"];

        // Verificar se uma imagem foi enviada
        if ($imagem["name"] !== "") {
            $uploadDir = "../imagens_carros/";
            $uploadFile = $uploadDir . basename($imagem["name"]);

            // Verificar se o upload foi bem-sucedido
            if (move_uploaded_file($imagem["tmp_name"], $uploadFile)) {
                $imagemPath = $uploadFile;
            } else {
                ?>
                <script>
                    window.location.href = "lista_carro.php";
                    alert("Erro ao fazer upload da imagem!");
                </script>
                <?php
            }
        } else {
            $imagemPath = ""; // Caso nenhum arquivo tenha sido enviado
        }

        $sql = "UPDATE carro SET quilometragem_inicial  = '{$quilometragem_inicial}', modelo = '{$modelo}', placa = '{$placa}', preco = '{$preco}', motorizacao = '{$motorizacao}' , ano = '{$ano}', cor = '{$cor}', automatico = '{$automatico}', marca = '{$marca}', imagem = '{$imagemPath}' WHERE idcarro = '$idcarro'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_affected_rows($conn) == 1) {
            //$_SESSION["idcarro"] = mysqli_insert_id($conn);
            ?>
            <script>
                window.location.href = "lista_carro.php";
                alert("Carro atualizado com sucesso!");
            </script>
            <?php
        } else {
            ?>
            <script>
                window.location.href = "lista_carro.php";
                alert("Erro ao atualizar carro!");
            </script>
            <?php
        }
    }
}
?>
