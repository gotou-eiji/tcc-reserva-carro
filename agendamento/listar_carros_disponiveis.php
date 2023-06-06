<?php
    session_start();
?>

<?php
include_once("../sessao/includes.php");

?>
<?php

$conn = $_SESSION["conexao"];

$sql = "SELECT * FROM carro";
$query = mysqli_query($conn, $sql);

if (mysqli_num_rows($query) > 0) {
    echo '
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Placa</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Motorização</th>
                    <th scope="col">Ano</th>
                    <th scope="col">Cor</th>
                    <th scope="col">Automático</th>
                </tr>
            </thead>
            <tbody>';
    while ($result = mysqli_fetch_assoc($query)) {
        echo '
        <tr>
            <td>' . $result["idcarro"] . '</td>
            <td>' . $result["marca"] . '</td>
            <td>' . $result["modelo"] . '</td>
            <td>' . $result["placa"] . '</td>
            <td>' . $result["preco"] . '</td>
            <td>' . $result["motorizacao"] . '</td>
            <td>' . $result["ano"] . '</td>
            <td>' . $result["cor"] . '</td>
            <td>' . $result["automatico"] . '</td>
            <td>
                <a href="form_agendamento.php?idcarro=' . $result["idcarro"] . '">
                    <button class="btn btn-success">
                        Reservar
                    </button>
                </a>
            </td>
            </td>
        </tr> 
        ';
    }
    echo '</tbody>';
}
?>
</table>
</div>