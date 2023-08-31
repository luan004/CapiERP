<link rel="stylesheet" href="src/css/style.css">
<link rel="stylesheet" href="src/css/header.css">

<header>
    <div class="logo">
        <a href="index.php">
            <img src="assets/img/logo.png" alt="Logo">
        </a>
    </div>
    <div class="menu">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="produtos.php">Produtos</a></li>
            <li><a href="contato.php">Contato</a></li>
            <li><a href="sobre.php">Sobre</a></li>
        </ul>
    </div>
    <?php
        if (!isset($_SESSION['user'])) {
            echo '<a class="button button-green" href="login.php">Login</a>';
        }
    ?>
</header>