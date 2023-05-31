<?php
    session_start();
?>

<?php
include_once("../includes.php");
if (isset($_POST["salvarcarro"])) {
    $conn = $_SESSION["conexao"];

    $marca = $_POST["marca"];
    $modelo = $_POST["modelo"];
    $placa = $_POST["placa"];
    $preco = $_POST["preco"];
    $motorizacao = $_POST["motorizacao"];
    $ano = $_POST["ano"];
    $cor = $_POST["cor"];
    $automatico = $_POST["automatico"];

    if (($marca == "") || ($modelo == "") || ($placa == "") || ($preco == "") || ($motorizacao == "") || ($ano == "") || ($cor == "") || ($automatico == "")) {
?>
        <script>
            window.location.href = "form_carro.php";
            alert("Voce precisa preencher os dados!");
        </script>
    <?php
    } else {
        $sql = "INSERT INTO carro (marca, modelo, placa, preco, motorizacao, ano, cor, automatico) VALUES ('{$marca}', '{$modelo}', '{$placa}', '{$preco}', '{$motorizacao}', '{$ano}', '{$cor}', '{$automatico}')";

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
    if (!mysqli_affected_rows($conn) == 1) {
    ?>
        <script>
            window.location.href = "cadastro_carro.php";
            alert("Erro ao inserir carro!");
        </script>
<?php
    }
}
?>