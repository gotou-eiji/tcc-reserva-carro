<?php
    session_start();
?>

<?php
include_once("../includes.php");

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
                                <th scope="col">Modelo</th>
                                <th scope="col">Placa</th>
                            </tr>
                        </thead>
                        <tbody>';
    while ($result = mysqli_fetch_assoc($query)) {
        echo '
                                <tr>
                                    <td>' . $result["modelo"] . '</td>
                                    <td>' . $result["placa"] . '</td>
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