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
                                        <a href="form_carro.php?idcarro=' . $result["idcarro"] . '">
                                            <button class="btn btn-danger">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                                </svg>
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