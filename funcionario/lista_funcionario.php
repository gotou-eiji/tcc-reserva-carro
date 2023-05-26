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
                                    <td>
                                    <a href="../adicionarcadastro/form_cadastros.php?idfuncionario=' . $result["idfuncionario"] . '">
                                            <button class="btn btn-warning">
                                                Adicionar Cadastro
                                            </button>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="../telefone/form_telefone.php?ifuncionario=' . $result["idfuncionario"] . '">
                                            <button class="btn btn-primary">
                                                Editar
                                            </button>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="../email/form_email.php?ifuncionario=' . $result["idfuncionario"] . '">
                                            <button class="btn btn-danger">
                                                Excluir
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