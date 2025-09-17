<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DengueFoco - Login</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <div class="login-card">
        <div class="login-logo">
            <img src="/resources/dengueFoco.png" alt="DengueFoco Logo">
        </div>
        <h2>Bem-vindo ao <strong>DengueFoco</strong></h2>
        <p class="subtext">Faça login para continuar</p>
        
        <form action="/includes/main.php" method="POST">
            <div class="input-group">
                <input type="text" name="username" placeholder="Email" required>
            </div>
            <div class="input-group">
                <input type="password" name="password" placeholder="Senha" required>
            </div>
            <button type="submit" class="btn-login">Entrar</button>
        </form>

        <div class="links">
            <a href="#">Esqueceu a senha?</a>
            <span>·</span>
            <a href="#">Criar conta</a>
        </div>
    </div>
</body>
</html>
