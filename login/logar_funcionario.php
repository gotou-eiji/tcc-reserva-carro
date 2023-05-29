<!DOCTYPE html>
<html lang="pt-br">
<head>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <title>Login</title>
</head>
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="login_funcionario.php" method="POST">
                    <h2>Login</h2>
                    <div class="inputbox">
                        <i class="bi bi-person-circle"></i>
                        <input type="user" name="usuario" required>
                        <label for="">User</label>
                    </div>
                    <div class="inputbox">
                        <i class="bi bi-eye-fill" id="btn-senha" onclick="mostrarsenha()"></i>
                        <input type="password" id="senha" name="senha" required>
                        <label for="">Password</label>
                    </div>
                    <div class="forget">
                        <label for=""><input type="checkbox">Remember Me<a href="#"></a></label>
                    </div>
                    <button class="w-25 p-3 btn-primary" type="submit" name="acessar">Log In
                </form>
            </div>
        </div>
    </section>
    <script src="script.js"></script>
</body>
</html>