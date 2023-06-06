<?php
include_once("../sessao/includes.php");
?>

<form action="form_carro.php" method="POST">
<center>
<button type="submit" name="salvarcarro" class="btn-secondary btn-lg ">Adicionar Carro</button>
</center>
</form>
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
                    <th scope="col">automático</th>
                    <th scope="col">Imagem</th>
                    <th scope="col">Ações</th>
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
                    <img src="' . $result["imagem"] . '" alt="Imagem do Carro" style="max-width: 200px; max-height: 200px;">
                </td>
                <td>
                    <a href="form_excluir.php?idcarro=' . $result["idcarro"] . '">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="Red" class="bi bi-trash" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                        </svg>
                    </a>
    
                    <a href="../carro/form_editar.php?idcarro=' . $result["idcarro"] . '&modelo=' . $result["modelo"] .'&placa=' . $result["placa"] .'&preco=' . $result["preco"] .'&motorizacao=' . $result["motorizacao"] .'&ano=' . $result["ano"] .'&cor=' . $result["cor"] .'&automatico=' . $result["automatico"] .'&marca=' . $result["marca"] . '">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                        </svg>
                    </a>
                </td>
            </tr> 
        ';
    
    }
    echo '</tbody>';
}
?>
</table>
</div>
