<!DOCTYPE html>
<html>
<head>
    <title>Cadastrar Usuário</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        form {
            text-align: center;
        }
    </style>
</head>
<body>
    <form action="rota.php?action=cadastrar" method="post">
        <h1>Cadastrar Usuário</h1>
        <label>Nome:</label>
        <input type="text" name="nome" required>
        <br><br>
        <label>Email:</label>
        <input type="email" name="email" required>
        <br><br>
        <label>Senha:</label>
        <input type="password" name="senha" required>
        <br><br>
        <button type="submit">Cadastrar</button>
        <a href="index.php">Cancelar</a>
    </form>
</body>
</html>
