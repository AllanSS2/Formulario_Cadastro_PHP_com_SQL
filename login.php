<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="box">
        <h1>Realize o Login</h1>
        <br>
        <form action="testarlogar.php" method="POST">
            <input class="inputUser" type="text" name="email" placeholder="E-mail">
            <br><br>
            <input class="inputUser" type="password" name="senha" placeholder="Senha">
            <br><br>
            <input class="enviar" type="submit" name="submit" value="Enviar">
        </form>
    </div>
</body>
</html>