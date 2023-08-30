<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos | CapiERP</title>
    <link rel="stylesheet" href="./src/css/style.css">
</head>
<body>
    <!-- header -->
    <?php include 'src/layout/header.php'; ?>

    <!-- conteudo -->
    <div class="root">
        <div class="row">
            <h5>Produtos</h5>
            <button class="button button-green">
                Criar novo produto
            </button>
        </div>
        <!-- table -->
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th>Quantidade</th>
                    <th>Descrição</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Produto 1</td>
                    <td>R$ 10,00</td>
                    <td>10</td>
                    <td>
                        <button class="button button-red">
                            Excluir
                        </button>
                    </td>
                </tr>
            </tbody>
    </div>

    <!-- rodape -->
    <?php include 'src/layout/footer.php'; ?>
</body>
</html>