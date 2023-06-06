<?php
include_once("../sessao/includes.php");
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

<div class="container">
    <form action="form_funcionario.php" method="POST">
        <div class="text-center">
            <button type="submit" name="salvarfuncionario" class="btn btn-secondary btn-lg">Adicionar Funcionário</button>
        </div>
    </form>

    <?php
    $conn = $_SESSION["conexao"];
    $sql = "SELECT * FROM funcionario";
    $query = mysqli_query($conn, $sql);

    if (mysqli_num_rows($query) > 0) {
        echo '<table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nome</th>
                        <th scope="col">CPF</th>
                        <th scope="col">Email</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Função</th>
                        <th scope="col">Emprego</th>
                        <th scope="col">Data Nasc.</th>
                        <th scope="col">CEP</th>
                        <th scope="col">Número</th>
                        <th scope="col">Complemento</th>
                        <th scope="col">Sexo</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>';

        while ($result = mysqli_fetch_assoc($query)) {

            echo '<tr>
                    <td>' . $result["idfuncionario"] . '</td>
                    <td>' . $result["nome"] . '</td>
                    <td>' . $result["cpf"] . '</td>
                    <td>' . $result["email"] . '</td>
                    <td>' . $result["telefone"] . '</td>
                    <td>' . $result["funcao"] . '</td>
                    <td>' . $result["emprego"] . '</td>
                    <td>' . $result["data_nascimento"] . '</td>
                    <td>' . $result["cep"] . '</td>
                    <td>' . $result["numero"] . '</td>
                    <td>' . $result["complemento"] . '</td>
                    <td>' . $result["sexo"] . '</td>
                    <td>
                    <a href="../adicionarcadastro/form_cadastros.php?idfuncionario=' . $result["idfuncionario"] . '">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="Yellow" class="bi bi-person-fill-add" viewBox="0 0 16 16">
                            <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0Zm-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                            <path d="M2 13c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Z"/>
                        </svg>
                        </a>
                    </td>
                    <td>
                        <a href="../funcionario/form_editar.php?idfuncionario=' . $result["idfuncionario"] . '&nome=' . $result["nome"] .'&cpf=' . $result["cpf"] .'&email=' . $result["email"] .'&telefone=' . $result["telefone"] .'&funcao=' . $result["funcao"] .'&emprego=' . $result["emprego"] .'&data_nascimento=' . $result["data_nascimento"] .'&cep=' . $result["cep"] .'&sexo=' . $result["sexo"] . '">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                            </svg>
                        </a>
                    </td>
                    <td>
                        <a href="../funcionario/form_excluir.php?idfuncionario=' . $result["idfuncionario"] . '">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="Red" class="bi bi-trash" viewBox="0 0 16 16">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                                <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                            </svg>
                        </a>
                    </td>
                </tr>';
        }
        echo '</tbody></table>';
    }
    ?>
</div>
