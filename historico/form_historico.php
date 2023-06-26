<?php
include_once("../sessao/conexao.php");
include_once("../sessao/includes.php");

$conn = $_SESSION["conexao"];

if ($_SESSION["admin"] == 1) {
    $sql = "SELECT agendamento.*, login.usuario, agendamento.nome_funcionario, 
            COALESCE(carro.quilometragem_inicial, agendamento.quilometragem_inicial) AS quilometragem_inicial
            FROM agendamento
            LEFT JOIN login ON agendamento.login_idlogin = login.idlogin
            LEFT JOIN carro ON agendamento.carro_idcarro = carro.idcarro";
} elseif ($_SESSION["admin"] == 0) {
    $login_idlogin = $_SESSION["idlogin"];
    $sql = "SELECT agendamento.*, login.usuario, agendamento.nome_funcionario, 
            COALESCE(carro.quilometragem_inicial, agendamento.quilometragem_inicial) AS quilometragem_inicial
            FROM agendamento
            LEFT JOIN login ON agendamento.login_idlogin = login.idlogin
            LEFT JOIN carro ON agendamento.carro_idcarro = carro.idcarro
            WHERE agendamento.login_idlogin = $login_idlogin";
}

$query = mysqli_query($conn, $sql);

if (mysqli_num_rows($query) > 0) {
    echo '
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">Quem agendou</th>
                    <th scope="col">Nome cliente</th>
                    <th scope="col">Data de Entrada</th>
                    <th scope="col">Data Previsto</th>
                    <th scope="col">Horário de Entrada</th>
                    <th scope="col">Horário de Saída</th>
                    <th scope="col">Motivo</th>
                    <th scope="col">Cidade</th>
                    <th scope="col">Bairro</th>
                    <th scope="col">Pagamento</th>
                    <th scope="col">Data que foi entregue</th>
                    <th scope="col">Quilometragem Inicial</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>';

    while ($result = mysqli_fetch_assoc($query)) {
        $nomeCliente = $result["nome_cliente"] ? $result["nome_cliente"] : "Cliente excluído";
        $nomeFuncionario = $result["nome_funcionario"] ? $result["nome_funcionario"] : "Funcionario excluído";
        $dataEntrada = date('d/m/Y', strtotime($result["entrada"]));
        $dataSaida = date('d/m/Y', strtotime($result["saida"]));
        
        echo '
            <tr>
                <td>' . $nomeFuncionario . '</td>
                <td>' . $nomeCliente . '</td>
                <td>' . $dataEntrada . '</td>
                <td>' . $dataSaida . '</td>
                <td>' . $result["horario_entrada"] . '</td>
                <td>' . $result["horario_saida"] . '</td>
                <td>' . $result["motivo"] . '</td>
                <td>' . $result["cidade"] . '</td>
                <td>' . $result["bairro"] . '</td>
                <td>' . $result["pagamento"] . "R$" . '</td>
                <td>' . $result["data_entregue"] . '</td>
                <td>' . $result["quilometragem_inicial"] . '</td>
                <td>
                    <a href="form_entrega-carro.php?idagenda=' . $result["idagenda"] . '&quilometragem_inicial=' . $result["quilometragem_inicial"] . '&pagamento=' . $result["pagamento"] . '" class="btn btn-success">Entregar Carro</a>
                </td>
            </tr>';
    }

    echo '</tbody>
        </table>
    </div>';
}
?>
