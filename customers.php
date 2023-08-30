<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes | CapiERP</title>
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
                Cadastrar novo cliente
            </button>
        </div>
        <form style="display: none">
            <label for="nome">Nome</label>
            <input type="text" name="nome" placeholder="Nome do cliente">

            <label for="cpf">CPF</label>
            <input type="text" name="cpf" placeholder="CPF do cliente">

            <label for="telefone">Telefone</label>
            <input type="text" name="telefone" placeholder="Telefone do cliente">

            <label for="email">E-Mail</label>
            <input type="text" name="email" placeholder="E-Mail do cliente">

            <label for="data_nascimento">Data de Nascimento</label>
            <input type="date" name="data_nascimento" placeholder="Data de nascimento do cliente">

            <button class="button button-green button-fluid">
                Cadastrar
            </button>
        </form>
        <!-- table -->
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Telefone</th>
                    <th>E-Mail</th>
                    <th>Data de Nascimento</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Cliente 1</td>
                    <td>000.000.000-00</td>
                    <td>(00) 00000-0000</td>
                    <td>mail@mail.com</td>
                    <td>01/01/2000</td>
                    <td>
                        <button class="button button-blue">
                            Editar
                        </button>
                    </td>
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