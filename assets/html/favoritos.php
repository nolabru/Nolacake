<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nolacake | Favoritos</title>
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/cupcakes.css">
    <link rel="stylesheet" href="../css/favoritos.css">
</head>

<body>
    <nav id="navBar">
        <a href="/Nolacake/index.php?usuario=<?php echo urlencode($_GET['usuario'] ?? '');?>"><img id="logo" src="../imgs/logoEscuro.png" alt="Logo Nolacake"></a>
        <ul id="navBarList">
                <li class="navBarItem"><a href="/Nolacake/index.php?usuario=<?php echo urlencode($_GET['usuario'] ?? '');?>">Home</a></li>
                <li class="navBarItem"><a href="../html/cupcakes.php?usuario=<?php echo urlencode($_GET['usuario'] ?? '');?>">Cupcakes</a></li>
                <li class="navBarItem"><a href="../html/favoritos.php?usuario=<?php echo urlencode($_GET['usuario'] ?? '');?>">Favoritos</a></li>
                <li class="navBarItem"><a href="../html/avaliacoes.php?usuario=<?php echo urlencode($_GET['usuario'] ?? '');?>">Avaliações</a></li>
                <li class="navBarItem"><a href="../html/sobrenos.php?usuario=<?php echo urlencode($_GET['usuario'] ?? '');?>">Sobre Nós</a></li>
                <li class="navBarItem">
                    <a href="../html/login.html">
                        <?php 
                            if (isset($_GET['usuario'])) {
                                // Pega o nome completo
                                $nomeCompleto = $_GET['usuario'];

                                // Divide o nome completo em partes e pega o primeiro nome
                                $primeiroNome = explode(' ', $nomeCompleto)[0];

                                // Exibe o primeiro nome
                                echo htmlspecialchars($primeiroNome);
                            } else {
                                echo 'Registre-se/Faça Login';
                            }
                        ?>
                    </a>
                </li>
        </ul>
        <a href="../html/carrinho.php?usuario=<?php echo urlencode($_GET['usuario'] ?? ''); ?>">
            <img id="cart" src="../imgs/carrinhoComprasEscuro.png" alt="Carrinho de compras">
        </a>
    </nav>

    <section id="cupcakesFavoritos">
        <!-- Os cupcakes favoritos serão adicionados aqui -->
    </section>
    <script src="../javascript/favoritos.js"></script>
</body>

</html>