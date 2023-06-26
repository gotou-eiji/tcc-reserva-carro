<?php
include_once("../sessao/includes.php");
?>

<link rel="stylesheet" href="../funcionario/style2.css"  />
<form action="form_funcionario.php" method="POST">
<center>
<button type="submit" name="salvarfuncionario" class="btn-secondary btn-lg ">Adicionar Funcionário</button>
</center>
</form>
<?php
$conn = $_SESSION["conexao"];
$sql = "SELECT FUNCIONARIO.*, LOGIN.* 
        FROM FUNCIONARIO
        LEFT JOIN LOGIN ON FUNCIONARIO.IDFUNCIONARIO = LOGIN.funcionario_idfuncionario";
$query = mysqli_query($conn, $sql);

if (mysqli_num_rows($query) > 0) {
    echo '<table class="table table-dark">
            <thead>
                <tr>

                    <th scope="col">É admin?</th>
                    <th scope="col">Nome Completo</th>
                    <th scope="col">CPF</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Função</th>
                    <th scope="col">Emprego</th>
                    <th scope="col">Data Nasc.</th>
                    <th scope="col">CEP</th>
                    <th scope="col">Sexo</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>';

    while ($result = mysqli_fetch_assoc($query)) {
        $dataNascimento = date('d/m/Y', strtotime($result["data_nascimento"]));
        
        echo '<tr>
        <td>' . (!empty($result["admin"]) ? "Sim" : "Não") . '</td>
                <td>' . $result["nome"] . '</td>
                <td>' . $result["cpf"] . '</td>
                <td>' . $result["email"] . '</td>
                <td>' . $result["telefone"] . '</td>
                <td>' . $result["funcao"] . '</td>
                <td>' . $result["emprego"] . '</td>
                <td>' . $dataNascimento . '</td>
                <td>' . $result["cep"] . '</td>
                <td>' . $result["sexo"] . '</td>
                <td>';

        if (!empty($result["idlogin"])) {
            echo '<a href="../adicionarcadastros/form_editar.php?idlogin=' . $result["idlogin"] . '&idfuncionario=' . $result["idfuncionario"] .'&usuario=' . $result["usuario"] . '">
            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor" class="bi bi-person-lock" viewBox="0 0 16 16">
            <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm0 5.996V14H3s-1 0-1-1 1-4 6-4c.564 0 1.077.038 1.544.107a4.524 4.524 0 0 0-.803.918A10.46 10.46 0 0 0 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h5ZM9 13a1 1 0 0 1 1-1v-1a2 2 0 1 1 4 0v1a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1v-2Zm3-3a1 1 0 0 0-1 1v1h2v-1a1 1 0 0 0-1-1Z"/>
          </svg>
                  </a>';
        } else {
            echo '<a href="../adicionarcadastros/form_cadastros.php?idfuncionario=' . $result["idfuncionario"] . '">
                    <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
                        <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                    </svg>
                  </a>';
        }

        echo '<a href="../funcionario/form_editar.php?idfuncionario=' . $result["idfuncionario"] . '&nome=' . $result["nome"] .'&cpf=' . $result["cpf"] .'&email=' . $result["email"] .'&telefone=' . $result["telefone"] .'&funcao=' . $result["funcao"] .'&emprego=' . $result["emprego"] .'&data_nascimento=' . $result["data_nascimento"] .'&cep=' . $result["cep"] .'&sexo=' . $result["sexo"] .'&idfuncionario=' . $result["idfuncionario"] . '">
        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="Green" class="bi bi-person-gear" viewBox="0 0 16 16">
        <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm.256 7a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Zm3.63-4.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382l.045-.148ZM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0Z"/>
      </svg>
              </a>
              <a href="../funcionario/form_excluir.php?idlogin=' . $result["idlogin"] .'&idfuncionario=' . $result["idfuncionario"] . '&nome=' . $result["nome"] .'&cpf=' . $result["cpf"] .'&email=' . $result["email"] .'&telefone=' . $result["telefone"] .'&funcao=' . $result["funcao"] .'&emprego=' . $result["emprego"] .'&data_nascimento=' . $result["data_nascimento"] .'&cep=' . $result["cep"] .'&sexo=' . $result["sexo"] . '">
              <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="Red" class="bi bi-trash" viewBox="0 0 16 16">
              <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
              <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
            </svg>
              </a>
            </td>
        </tr>';
    }

    echo '</tbody>
          </table>';
} else {
    echo "Nenhum registro encontrado.";
}

?>
