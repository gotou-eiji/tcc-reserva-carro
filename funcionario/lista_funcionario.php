<?php
    session_start();
?>

<?php

include_once("../includes.php");

?>

<?php

$conn = $_SESSION["conexao"];

$sql = "SELECT * FROM FUNCIONARIO";
$query = mysqli_query($conn, $sql);

if (mysqli_num_rows($query) > 0) {
    echo '
                <div ng-show="mostraPF">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Nome</th>
                                <th scope="col">CPF</th>
                                <th scope="col">Email</th>
                                <th scope="col">Telefone</th>
                                <th scope="col">Função</th>
                                <th scope="col">Emprego</th>
                                <th scope="col">Sexo</th>
                                <th scope="col">Data de Nascimento</th>
                                <th scope="col">CEP</th>
                            </tr>
                        </thead>
                        <tbody>';
    while ($result = mysqli_fetch_assoc($query)) {
        echo '
                                <tr>
                                    <td>' . $result["idfuncionario"] . '</td>
                                    <td>' . $result["nome"] . '</td>
                                    <td>' . $result["cpf"] . '</td>
                                    <td>' . $result["email"] . '</td>
                                    <td>' . $result["telefone"] . '</td>
                                    <td>' . $result["funcao"] . '</td>
                                    <td>' . $result["emprego"] . '</td>
                                    <td>' . $result["sexo"] . '</td>
                                    <td>' . $result["data_nascimento"] . '</td>
                                    <td>' . $result["cep"] . '</td>
                                    <td>
                                    <a href="../adicionarcadastro/form_cadastros.php?idfuncionario=' . $result["idfuncionario"] . '">
                                            <button class="btn btn-warning">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill-add" viewBox="0 0 16 16">
                                                    <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0Zm-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                                                    <path d="M2 13c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Z"/>
                                                </svg>
                                            </button>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="../telefone/form_telefone.php?ifuncionario=' . $result["idfuncionario"] . '">
                                            <button class="btn btn-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                                </svg>
                                            </button>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="../email/form_email.php?ifuncionario=' . $result["idfuncionario"] . '">
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