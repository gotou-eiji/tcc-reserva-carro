<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Busca CEP</title>
        <meta charset="utf-8"/>
        <meta http-equiv="content-language" content="pt-br"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <form action="cep.php" method="POST">
            <div class="form-group">
                <label>CEP</label>
                <input type="text" class="form-control" name="cep" placeholder="Insira o CEP" required/>
                <br/>
                <br/>
                <button type="submit" class="btn btn-outline-success">Inserir</button>
            </div>
        </form>
        <?php
            $cep = filter_input(INPUT_POST, "cep");
            if($cep){
    $cep = str_replace("-", "", $cep);
 
    $json = file_get_contents('https://viacep.com.br/ws/'. $cep . '/json/');
 
    $jsonToArray = json_decode($json);
    ?>
    <p>CEP: <?=$jsonToArray->cep;?></p>
    <p>RUA: <?=$jsonToArray->logradouro;?></p>
    <p>COMPLEMENTO: <?=$jsonToArray->complemento;?></p>
    <p>BAIRRO: <?=$jsonToArray->bairro;?></p>
    <p>LOCALIDADE: <?=$jsonToArray->localidade;?></p>
    <p>UF: <?=$jsonToArray->uf;?></p>
    <?php
}
?>
    </body>
</html>