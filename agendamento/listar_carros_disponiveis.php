<?php
include_once("../sessao/includes.php");

?>

<link rel="stylesheet" href="../funcionario/style2.css"  />
<?php

$conn = $_SESSION["conexao"];

$sql = "SELECT * FROM carro";
$query = mysqli_query($conn, $sql);

if (mysqli_num_rows($query) > 0) {
    echo '
        <table class="table table-dark">
            <thead>
                <tr>
                <th scope="col">Marca</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Placa</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Motorização</th>
                    <th scope="col">Ano</th>
                    <th scope="col">Automático</th>
                    <th scope="col">Quilometragem Inicial</th>
                    <th scope="col">Imagem</th>
                </tr>
            </thead>
            <tbody>';
    while ($result = mysqli_fetch_assoc($query)) {
        echo '
            <tr>
            <td>' . $result["marca"] . '</td>
                <td>' . $result["modelo"] . '</td>
                <td>' . $result["placa"] . '</td>
                <td>' . $result["preco"] . '</td>
                <td>' . $result["motorizacao"] . '</td>
                <td>' . $result["ano"] . '</td>
                <td>' . $result["automatico"] . '</td>
                <td>' . $result["quilometragem_inicial"] . ' km</td>

                <td>
                    <img src="' . $result["imagem"] . '" alt="Imagem do Carro" style="max-width: 200px; max-height: 200px;">
                </td>
                <td>
                    <a href="form_agendamento.php?idcarro=' . $result["idcarro"] . '">
                        <button class="btn btn-success">
                            Reservar Para Você
                        </button>
                    </a>
                ';
        }
        echo '
                </td>
            </tr> 
        ';
    }
    echo '</tbody>';
    echo '</table>';

?>
</div>
