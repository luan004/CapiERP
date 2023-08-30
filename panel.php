<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel | CapiERP</title>
    <link rel="stylesheet" href="./src/css/panel.css">
</head>
<body>
    <!-- header -->
    <?php include 'src/layout/header.php'; ?>

    <!-- conteudo -->
    <div class="root">
        <h3>Seja bem-vindo, placeholder</h3>
        <div class="box">
            <div class="item">
                <h4>Produtos</h4>
                <p>Adicione ou remova produtos</p>
                <a href="produtos.php">Acessar</a>
            </div>
            <div class="item">
                <h4>Clientes</h4>
                <p>Adicione ou remova clientes</p>
                <a href="clientes.php">Acessar</a>
            </div>
            <div class="item">
                <h4>Funcionários</h4>
                <p>Adicione ou remova funcionários</p>
                <a href="vendas.php">Acessar</a>
            </div>
            <div class="item">
                <h4>Vendas</h4>
                <p>Realize vendas para clientes</p>
                <a href="vendas.php">Acessar</a>
            </div>
        </div>
    </div>

    <!-- rodape -->
    <?php include 'src/layout/footer.php'; ?>
</body>
</html>