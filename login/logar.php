<?php

include_once("../cabecalho.php");
include_once("logar_funcionario.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Login</title>
</head>

<body>
    <div class="main-login">
        <div class="position-absolute top-0 start-0 translate-middle"></div>

        <div class="main-login">
            <div class="col">Logar como Funcionario</h1>
                <div>
                    <div class="fadeIn first">
                    </div>
                    <form action="login.php" method="POST">
                        <input type="text" class="w-25 p-3" id="floatingInput" name="usuario" placeholder="login">
                        <div class="form-floating">
                            <input type="password" class="w-25 p-3" id="floatingPassword" name="senha" placeholder="senha">
                            <label for="floatingPassword"></label>
                        </div>
                        <label>
                            <input type="checkbox" value="remember-me"> Me lembrar
                        </label>
                </div>
                <button class="w-25 p-3 btn-primary" type="submit" name="acessar">Logar

            </div>
        </div>
</body>

</html>