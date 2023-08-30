<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | CapiERP</title>
    <link rel="stylesheet" href="./src/css/style.css">
</head>
<body>
    <!-- header -->
    <?php include 'src/layout/header.php'; ?>

    <!-- conteudo -->
    <div class="root">
        <div class="login">
            <form>
                <h1>Login</h1>
                <input type="text" placeholder="Usuário">
                <input type="password" placeholder="Senha">
                <input type="submit" value="Entrar">
            </form>
        </div>
    </div>

    <!-- rodape -->
    <?php include 'src/layout/footer.php'; ?>
</body>
</html>